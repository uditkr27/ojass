angular.module('eventApp',['ngSanitize','ngAnimate'])
	.controller('demoCtrl',['$scope',function($scope){

		firebase.database().ref('/Events').once('value',function(snap){
			$scope.flag=false
			$scope.$apply(function(){
				//branch,about,coordinators array,detail,name,prize array,rules array,
				var zz=snap.val()
				// for(var j in zz){
				// 	console.log(zz[j].branch);
				// }
				var e=[];
				
				var BRANCHNAME = branchname.toUpperCase();
				console.log(BRANCHNAME + "  "+ branchname);

				if(branchname == 'Live_CS '|| BRANCHNAME == 'LIVE_CS'){
					branchname = 'Live CS';
				}

				if(branchname == 'Neodrishti '|| BRANCHNAME == 'NEODRISHTI'){
					branchname = 'Neo Drishti';
				}

				if(branchname == 'No_Ground_Zone '|| BRANCHNAME == 'NO_GROUND_ZONE'){
					branchname = 'No Ground Zone';
				}
				if(branchname == 'Rise_of_Machines '|| BRANCHNAME == 'RISE_OF_MACHINES'){
					branchname = 'Rise of Machines';
				}
				if(branchname == 'Silicon_Valley'|| BRANCHNAME == 'SILICON_VALLEY'){
					branchname = 'Silicon Valley';
				}
				if(branchname == 'School_Events'|| BRANCHNAME == 'SCHOOL_EVENTS'){
					branchname = 'School Events';
				}
				if (branchname == 'Checkered_Flag' || BRANCHNAME == 'CHECKERED_FLAG') {
					branchname = 'Checkered Flag';
					console.log(branchname);
				}

				for(var i in zz){
					// console.log(i);

					if(zz[i].branch==branchname || zz[i].branch == BRANCHNAME){
						// console.log(zz[i]);
						e.push(zz[i]);
						
						
					}
				}
				// console.log(e);
				for(var i in e){
					var prizes = e[i].prize;
					for(key in prizes){
						if(prizes[key]==0) delete prizes[key];
					}
				}
				for(var i in e){
				    var prizes = e[i].prize
					for(var j in prizes){
						var prizemoney= prizes[j];
						if(prizemoney==0){
							delete prizemoney;
						}
						for(var prop in prizemoney){
							if(prizemoney[prop]==0){
								delete prizemoney[prop];
							}
						}
						// if(j.first==0){
						// 	delete j.first;
						// }
						// if(j.second=='0'){
						// 	delete j.second;
						// }
						// if(j.third==0){
						// 	console.log(j.third);
						// 	delete j.third;
						// }
					}
				}
				
				// for(var i in e){
				//     var prizes = e[i].prize;
				//     for(key in prizes){
				//         if(prizes[key]==0) delete prizes[key];
				//         for(var prop in prizes[key]){
				            
				//         }
				//     }
				// }
				
				$scope.events=e;
				console.log($scope.events);
				$scope.flag=true;
			
				$('.load-img').hide();
				$('#headline').show();
				$('.event-img').show();

			})
		})

		// for event about and heads 
		firebase.database().ref(`/Branches/${branchname}`).once('value', function (snap) {
			var h=[];
			if(snap.val()!=null){
				console.log(snap.val());
				console.log(snap.val().about);
				// console.log(snap.val().head);
				// var headObj  =  snap.val().head;
				// var heads = Object.keys(snap.val().head).map(i => h[i]);
				// var result = Object.keys(snap.val().head).map(function(key) {
				// 	return [Number(key), snap.val().head[key]];
				// 	});
				
				var head = snap.val().head;
				var headArr = [];

				for (key in head){
					headArr.push(head[key]);
				}

					console.log(headArr);

			}

			
				$scope.head = headArr;
				// console.log(heads);
				$scope.about = snap.val().about;





		})
		// for event about and heads  end

			
	}])

	.filter('removeBrackets',function(){
		return function(x){
			x=x.replace(/\(|\)/g, '').replace(/&/g,"").replace(/'/g,"").replace(/!/g,"").replace(/,/g,"").split('.').join("");
			return x;
		}
	})

	.filter('html', ['$sce', function ($sce) { 
    return function (text) {
        return $sce.trustAsHtml(text);
    	};    
	}])
	
	.filter('capitalize', function() {
        return function(input) {
          return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
        }
    });
