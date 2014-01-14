(function(global) {
    global.monkeytestjs = {
        "facebookId": "000000000000000",

        "local": {
            "env": ["dev"]
        },
        "stage": {
            "env": ["STAGE URL OR PART OF"],
            "facebookId": "222222222222222"
        },
        "beta": {
            "env": ["BETA URL OR PART OF"],
            "facebookId": "33333333333333333"
        },
        "production": {
            "env": ["PRODUCTION URL OR PART OF"],
            "facebookId": "4444444444444444444"
        },
        "testsDir": "mytests",
        "globalTests": [
            "global/is_html_w3c_valid.js",
        ],
        "pages": [
            {
                "url": "../",
                "tests": [
                    "page/validate_form.js",
                ]
            }
        ],
        "proxyUrl": "core/proxy.php?mode=native&url=<%= url %>",
        "loadSources": true
    };
})(this);