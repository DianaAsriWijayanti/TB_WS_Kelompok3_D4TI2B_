angular.module('app.routes', ['ionicUIRouter'])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
    
  

      .state('tabsController', {
    url: '/page12',
    templateUrl: 'templates/tabsController.html',
    abstract:true
  })

  /* 
    The IonicUIRouter.js UI-Router Modification is being used for this route.
    To navigate to this route, do NOT use a URL. Instead use one of the following:
      1) Using the ui-sref HTML attribute:
        ui-sref='tabsController.pesan'
      2) Using $state.go programatically:
        $state.go('tabsController.pesan');
    This allows your app to figure out which Tab to open this page in on the fly.
    If you're setting a Tabs default page or modifying the .otherwise for your app and
    must use a URL, use one of the following:
      /page12/tab1/page8
      /page12/tab3/page8
      /page12/tab5/page8
  */
  .state('tabsController.pesan', {
    url: '/page8',
    views: {
      'tab1': {
        templateUrl: 'templates/pesan.html',
        controller: 'pesanCtrl'
      },
      'tab3': {
        templateUrl: 'templates/pesan.html',
        controller: 'pesanCtrl'
      },
      'tab5': {
        templateUrl: 'templates/pesan.html',
        controller: 'pesanCtrl'
      }
    }
  })

  .state('tabsController.about', {
    url: '/page11',
    views: {
      'tab5': {
        templateUrl: 'templates/about.html',
        controller: 'aboutCtrl'
      }
    }
  })

  /* 
    The IonicUIRouter.js UI-Router Modification is being used for this route.
    To navigate to this route, do NOT use a URL. Instead use one of the following:
      1) Using the ui-sref HTML attribute:
        ui-sref='tabsController.home'
      2) Using $state.go programatically:
        $state.go('tabsController.home');
    This allows your app to figure out which Tab to open this page in on the fly.
    If you're setting a Tabs default page or modifying the .otherwise for your app and
    must use a URL, use one of the following:
      /page12/tab1/page12
      /page12/tab3/page12
      /page12/tab5/page12
  */
  .state('tabsController.home', {
    url: '/page12',
    views: {
      'tab1': {
        templateUrl: 'templates/home.html',
        controller: 'homeCtrl'
      },
      'tab3': {
        templateUrl: 'templates/home.html',
        controller: 'homeCtrl'
      },
      'tab5': {
        templateUrl: 'templates/home.html',
        controller: 'homeCtrl'
      }
    }
  })

  .state('tabsController.galeryPoltekpos', {
    url: '/page13',
    views: {
      'tab5': {
        templateUrl: 'templates/galeryPoltekpos.html',
        controller: 'galeryPoltekposCtrl'
      }
    }
  })

  .state('tabsController.jurusan', {
    url: '/page14',
    views: {
      'tab5': {
        templateUrl: 'templates/jurusan.html',
        controller: 'jurusanCtrl'
      }
    }
  })

  .state('tabsController.tI', {
    url: '/page15',
    views: {
      'tab5': {
        templateUrl: 'templates/tI.html',
        controller: 'tICtrl'
      }
    }
  })

  .state('tabsController.mB', {
    url: '/page18',
    views: {
      'tab5': {
        templateUrl: 'templates/mB.html',
        controller: 'mBCtrl'
      }
    }
  })

  .state('tabsController.sI', {
    url: '/page20',
    views: {
      'tab5': {
        templateUrl: 'templates/sI.html',
        controller: 'sICtrl'
      }
    }
  })

  .state('tabsController.aKA', {
    url: '/page16',
    views: {
      'tab5': {
        templateUrl: 'templates/aKA.html',
        controller: 'aKACtrl'
      }
    }
  })

  .state('tabsController.logistikBisnis', {
    url: '/page17',
    views: {
      'tab5': {
        templateUrl: 'templates/logistikBisnis.html',
        controller: 'logistikBisnisCtrl'
      }
    }
  })

  .state('tabsController.tentang', {
    url: '/page19',
    views: {
      'tab5': {
        templateUrl: 'templates/tentang.html',
        controller: 'tentangCtrl'
      }
    }
  })

  .state('tabsController.profilPoltekpos', {
    url: '/page22',
    views: {
      'tab5': {
        templateUrl: 'templates/profilPoltekpos.html',
        controller: 'profilPoltekposCtrl'
      }
    }
  })

  .state('tabsController.alamat', {
    url: '/page23',
    views: {
      'tab5': {
        templateUrl: 'templates/alamat.html',
        controller: 'alamatCtrl'
      }
    }
  })

  .state('tabsController.contact', {
    url: '/page24',
    views: {
      'tab5': {
        templateUrl: 'templates/contact.html',
        controller: 'contactCtrl'
      }
    }
  })

  .state('tabsController.teamDeveloper', {
    url: '/page25',
    views: {
      'tab5': {
        templateUrl: 'templates/teamDeveloper.html',
        controller: 'teamDeveloperCtrl'
      }
    }
  })

  .state('tabsController.halamannews', {
    url: '/page10',
    views: {
      'tab2': {
        templateUrl: 'templates/halamannews.html',
        controller: 'halamannewsCtrl'
      }
    }
  })

$urlRouterProvider.otherwise('/page12/page13')

  

});