angular.module('gettingStarted', [])
    .directive('gettingStartedFactory', function() {
        return {
            bindToController : true,
            controller: 'FactoryController',
            controllerAs: 'factoryController',
            templateUrl: 'scripts/factory-widget.html',
            scope: {
                factory: '=factory',
            }
        };
    })
    .filter('factoryCategoryFilter', function () {
        return function (factories, enabledCategories) {
            if (enabledCategories.length > 0) {
                var filtered = [];
                for (var i = 0; i < factories.length; i++) {
                    var factory = factories[i];
                    if (enabledCategories.indexOf(factory.category) >= 0) {
                        filtered.push(factory);
                    }
                }
                return filtered;
            }

            return factories;
        }
    })
    .filter('factoryLanguageFilter', function () {
        return function (factories, enabledLanguages) {
            if (enabledLanguages.length > 0) {
                var filtered = [];
                for (var i = 0; i < factories.length; i++) {
                    var factory = factories[i];
                    var languages = factory.languages;
                    if (languages) {
                        languages.forEach(function (language) {
                            if (enabledLanguages.indexOf(language) >= 0) {
                                filtered.push(factory);
                            }
                        });
                    }

                }
                return filtered;
            }

            return factories;
        }
    })
    .controller('FactoryController', function () {



    })
    .directive('gettingStartedFactories', function() {
        return {
            bindToController : true,
            controller: 'FactoriesController',
            controllerAs: 'factoriesController',
            templateUrl: 'scripts/factories-widget.html'
        };
    })
    .controller('FactoriesController', ['$http', function ($http) {
        this.availableCategories = [];
        this.availableLanguages = [];
        this.enabledCategories = [];
        this.enabledLanguages = [];
        this.factories = [];
        var self = this;
        var promise = $http.get('scripts/factories.json');

        this.toggleSelected = function (item, enabledArray) {
            var index = enabledArray.indexOf(item);
            if (index < 0) {
                enabledArray.push(item);
            } else {
                enabledArray.splice(index, 1);
            }
        };

        this.isChecked = function (item, enabledArray) {
            return enabledArray.indexOf(item) >= 0;
        };

        this.checkAll = function (availableArray) {
            return availableArray.slice(0);
        };


        this.toggleSelectedLanguage = function (language) {
            return self.toggleSelected(language, self.enabledLanguages);
        };

        this.toggleSelectedCategory = function (category) {
            return self.toggleSelected(category, self.enabledCategories);
        };


        this.isCheckedCategory = function (category) {
            return self.isChecked(category, self.enabledCategories);
        };

        this.isCheckedLanguage = function (language) {
            return self.isChecked(language, self.enabledLanguages);
        };

        this.checkAllLanguages = function () {
            self.enabledLanguages = self.checkAll(self.availableLanguages);
        };

        this.checkAllCategories = function () {
            self.enabledCategories = self.checkAll(self.availableCategories);
        };

        promise.then(function (response) {
            self.factories = response.data.factories;

            // now, populate the different categories
            self.factories.forEach(function(factory) {
                if (self.availableCategories.indexOf(factory.category) < 0) {
                    self.availableCategories.push(factory.category);
                }

                var languages = factory.languages;
                if (languages) {
                    languages.forEach(function (language) {
                       if (self.availableLanguages.indexOf(language) < 0) {
                           self.availableLanguages.push(language);
                       }
                    });
                }
            });

            // sort arrays
            self.availableCategories.sort();
            self.availableLanguages.sort();

        });

        this.toggleCategory = function (category) {
            var index = self.enabledCategories.indexOf(category);
            if (index >= 0) {
                self.enabledCategories.splice(index, 1);
            } else {
                self.enabledCategories.push(category);
            }
        }


    }]);
