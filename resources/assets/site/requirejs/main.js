require.config({
   //baseUrl: "site/requirejs/",

    paths: {

        angular: 'angular-1.3.15.min',
        jquery:  'jquery-2.1.3.min',
        controllers:'controllers',
        formcontroller:'formController',
        everything: 'everything'

    },

    shim:
    {
        'everything':{

            deps:['jquery']
        },

        'controllers':
        {
                 deps:['angular']
        },


        'formcontroller':
        {
            deps:['jquery']
        }


    }


});

require(['everything'], function($){ });

require(['controllers'], function($) {
    //angular.boostrap(document,['controllers']);
});

require(['formcontroller'], function($){return $.noConflict(true);});




