<?php 
namespace App\Services;
use App\Models\SocialFacebookAccount;
use App\Models\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialFacebookAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialFacebookAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();
			
			
        if ($account) {
            return $account->user;
        } else {

            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);
			
			$digits = 5;
			$customer_id = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
            $user = User::whereEmail($providerUser->getEmail())->first();
			$name = $providerUser->getName();
			$name_data = explode(' ',$name);
			if (!$user) {$user = User::create([
                    'email' => $providerUser->getEmail(),
                    'first_name' => $name_data[0] ? $name_data[0] : '',
                    'last_name' => $name_data[1] ? $name_data[1] : '',
                    'status' =>1,
					'customer_id' => $customer_id,
                     'profile_photo' =>$providerUser->getAvatar(),
                    'password' => md5(rand(1,10000)),
					
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}