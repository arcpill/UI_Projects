/*
 * object to contain all items accessable to all control functions
 */
var globals = {};

/*
 * choosing difficulty level (onclick span.level) behavior and control
 * when a level is clicked, it becomes highlighted and the "ai.level" variable
 * is set to the chosen level
 */
$(".level").each(function() {
    var $this = $(this);
    $this.click(function() {
        $('.selected').toggleClass('not-selected');
        $('.selected').toggleClass('selected');
        $this.toggleClass('not-selected');
        $this.toggleClass('selected');

        ai.level = $this.attr("id");
    });
});

/*
 * start game (onclick div.start) behavior and control
 * when start is clicked and a level is chosen, the game status changes to "running"
 * and UI view to swicthed to indicate that it's human's trun to play
 */
$(".start").click(function() {
    var selectedDiffeculty = $('.selected').attr("id");
    if(typeof selectedDiffeculty !== "undefined") {
        var aiPlayer = new AI(selectedDiffeculty);
        globals.game = new Game(aiPlayer);

        aiPlayer.plays(globals.game);

        globals.game.start();
    }
	$('.choice div').css('display', 'inline-block');
});

/*
 * click on cell (onclick div.cell) behavior and control
 * if an empty cell is clicked when the game is running and its the human player's trun
 * get the indecies of the clickd cell, craete the next game state, upadet the UI, and
 * advance the game to the new created state
 */
 
 $(".cell").each(function() {
     var $this = $(this);
     $this.click(function() {
         /*if(globals.game.status === "running" && globals.game.currentState.turn === "X" && !$this.hasClass('occupied')) {
             var indx = parseInt($this.data("indx"));

             var next = new State(globals.game.currentState);
             next.board[indx] = "X";

             ui.insertAt(indx, "X");

             next.advanceTurn();

             globals.game.advanceTo(next);

         }*/
     })
 });
 
 /*
 * drag allowDrop & drop(X or O) behavior and control
 * If X is selected & dragged then O is drag disabled & vise versa.
 * get the indecies of the dragged cell, create the next game state, upadet the UI, and
 * advance the game to the new created state
 */
function drag(ev) {
			
			console.log("Start-"+ev.target.id);
			
			if( ev.target.id == "drag2"){
				ev.dataTransfer.setData("O", ev.target.id);
				document.getElementById('drag1').draggable = false;

			}else{
			    ev.dataTransfer.setData("X", ev.target.id);
				document.getElementById('drag2').draggable= false;
				}
}

function allowDrop(ev) {
			ev.preventDefault();
			}

			
function drop(ev) {
	var $this = $(this);
			ev.preventDefault();
			
			var data = ev.dataTransfer.getData("X");
			// if X is dropped or O
			 if (data) {
				var nodeCopy = document.getElementById(data).cloneNode(true);
				nodeCopy.id = "X";
				ev.target.appendChild(nodeCopy);
				globals.game.currentState.turn = "X"; 
				
			}else {
				var data = ev.dataTransfer.getData("O");
				console.log("O"+ data);
				var nodeCopy = document.getElementById(data).cloneNode(true);
				nodeCopy.id = "O";
				ev.target.appendChild(nodeCopy);
				globals.game.currentState.turn = "O";
			}
				
			
		// Set X as human choice & advance to next step
   		if(globals.game.status === "running" && globals.game.currentState.turn === "X" && !$this.hasClass('occupied')) {
            
			var indx = parseInt($(ev.target).attr('data-indx'));
			
			console.log("selected Index for X - "+ indx);
			
			var next = new State(globals.game.currentState);
             next.board[indx] = "X";

             ui.insertAt(indx, "X");
			 globals.game.currentState.initialTurn = "X";

             next.advanceTurn();
			 globals.game.initurn = "X";

             globals.game.advanceTo2(next);

          }
		  
		  // Set O as human choice & advance to next step
		  if(globals.game.status === "running" && globals.game.currentState.turn === "O" && !$this.hasClass('occupied')) {
            
			var indx = parseInt($(ev.target).attr('data-indx'));
			
			console.log("selected Index for O- "+ indx);
			
			var next = new State(globals.game.currentState);
             next.board[indx] = "O";

             ui.insertAt(indx, "O");
			 
             next.advanceTurn();
			 globals.game.initurn = "O";
             globals.game.advanceTo2(next);
			 
			

          }
}
		

			
 
