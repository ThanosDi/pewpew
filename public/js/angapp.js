angular.module('myApp', [])
  .controller('MovieController', function($scope, $http){

    // firstLoad();

    $scope.$watch('search', function() {
      fetch();
    });

     $scope.search = "";


    // function firstLoad(){
    //   $http.get("https://api.magicthegathering.io/v1/cards")
    //   .then(function(response){ $scope.fullcards = response.data.cards;  });
    // }



    function fetch(){
      $http.get("https://api.magicthegathering.io/v1/cards?name=" + $scope.search)
      .then(function(response){ $scope.cards = response.data.cards; console.log(response.data) });
    }
    //   $http.get("http://www.omdbapi.com/?s=" + $scope.search)
    //   .then(function(response){ $scope.related = response.data; });
    // }

    // $scope.update = function(movie){
    //   $scope.search = movie.Title;
    // };

    // $scope.select = function(){
    //   this.setSelectionRange(0, this.value.length);
    // }
  });