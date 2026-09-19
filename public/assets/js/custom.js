document.addEventListener('DOMContentLoaded', function () {

    const STORAGE_KEY = 'knot_cookie_consent';

    const banner = document.getElementById('cookieConsentBanner');

    const acceptButton =
        document.getElementById('acceptCookiesBtn');

    const rejectButton =
        document.getElementById('rejectCookiesBtn');

    const settingsButton =
        document.getElementById('cookieSettingsBtn');

    const saveButton =
        document.getElementById('saveCookiePreferences');

    const analyticsCheckbox =
        document.getElementById('analyticsCookies');

    const marketingCheckbox =
        document.getElementById('marketingCookies');


    /*
    |--------------------------------------------------------------------------
    | Get Saved Consent
    |--------------------------------------------------------------------------
    */

    function getConsent() {

        const consent =
            localStorage.getItem(STORAGE_KEY);

        if (!consent) {
            return null;
        }

        try {

            return JSON.parse(consent);

        } catch (error) {

            console.error(
                'Invalid cookie consent data',
                error
            );

            return null;
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Save Consent
    |--------------------------------------------------------------------------
    */

    function saveConsent(consent) {

        localStorage.setItem(
            STORAGE_KEY,
            JSON.stringify(consent)
        );

        applyConsent(consent);

        hideBanner();
    }


    /*
    |--------------------------------------------------------------------------
    | Apply Consent
    |--------------------------------------------------------------------------
    */

    function applyConsent(consent) {

        /*
        |--------------------------------------------------------------------------
        | Analytics
        |--------------------------------------------------------------------------
        */

        if (consent.analytics === true) {

            loadGoogleAnalytics();

        }


        /*
        |--------------------------------------------------------------------------
        | Marketing
        |--------------------------------------------------------------------------
        */

        if (consent.marketing === true) {

            loadMarketingScripts();

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Accept All
    |--------------------------------------------------------------------------
    */

    acceptButton.addEventListener('click', function () {

        saveConsent({

            necessary: true,

            analytics: true,

            marketing: true,

            timestamp: new Date().toISOString()

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Reject Non-Essential
    |--------------------------------------------------------------------------
    */

    rejectButton.addEventListener('click', function () {

        saveConsent({

            necessary: true,

            analytics: false,

            marketing: false,

            timestamp: new Date().toISOString()

        });

    });


    /*
    |--------------------------------------------------------------------------
    | Open Settings
    |--------------------------------------------------------------------------
    */

    settingsButton.addEventListener('click', function () {

        const consent = getConsent();

        if (consent) {

            analyticsCheckbox.checked =
                consent.analytics === true;

            marketingCheckbox.checked =
                consent.marketing === true;

        }

        const modalElement =
            document.getElementById('cookieSettingsModal');

        const modal =
            bootstrap.Modal.getOrCreateInstance(
                modalElement
            );

        modal.show();

    });


    /*
    |--------------------------------------------------------------------------
    | Save Preferences
    |--------------------------------------------------------------------------
    */

    saveButton.addEventListener('click', function () {

        saveConsent({

            necessary: true,

            analytics:
                analyticsCheckbox.checked,

            marketing:
                marketingCheckbox.checked,

            timestamp: new Date().toISOString()

        });


        const modalElement =
            document.getElementById('cookieSettingsModal');

        const modal =
            bootstrap.Modal.getInstance(
                modalElement
            );

        if (modal) {
            modal.hide();
        }

    });


    /*
    |--------------------------------------------------------------------------
    | Hide Banner
    |--------------------------------------------------------------------------
    */

    function hideBanner() {

        banner.style.display = 'none';

    }


    /*
    |--------------------------------------------------------------------------
    | Show Banner
    |--------------------------------------------------------------------------
    */

    function showBanner() {

        banner.style.display = 'block';

    }


    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    */

    function loadGoogleAnalytics() {

        /*
        |--------------------------------------------------------------------------
        | Prevent loading twice
        |--------------------------------------------------------------------------
        */

        if (window.googleAnalyticsLoaded) {
            return;
        }

        window.googleAnalyticsLoaded = true;


        /*
        |--------------------------------------------------------------------------
        | Google Analytics
        |--------------------------------------------------------------------------
        |
        | Replace G-XXXXXXXXXX with your GA4 Measurement ID.
        |
        */

        const script =
            document.createElement('script');

        script.async = true;

        script.src =
            'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';

        document.head.appendChild(script);


        window.dataLayer =
            window.dataLayer || [];

        function gtag() {
            window.dataLayer.push(arguments);
        }

        window.gtag = gtag;


        gtag(
            'js',
            new Date()
        );


        gtag(
            'config',
            'G-XXXXXXXXXX'
        );

    }


    /*
    |--------------------------------------------------------------------------
    | Marketing Scripts
    |--------------------------------------------------------------------------
    */

    function loadMarketingScripts() {

        /*
        |--------------------------------------------------------------------------
        | Add your marketing/advertising scripts here.
        |--------------------------------------------------------------------------
        |
        | Example:
        |
        | loadFacebookPixel();
        | loadGoogleAds();
        |
        */

        console.log(
            'Marketing cookies accepted.'
        );

    }


    /*
    |--------------------------------------------------------------------------
    | Initialisation
    |--------------------------------------------------------------------------
    */

    const consent = getConsent();


    if (!consent) {

        showBanner();

    } else {

        applyConsent(consent);

    }

});