<?php
namespace SocialiteProviders\TwentyThreeAndMe;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TwentyThreeAndMeExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            '23andme', __NAMESPACE__.'\Provider'
        );
    }
}
