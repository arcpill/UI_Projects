<!DOCTYPE HTML>
<html>
    <head>
        <title>Tic-Tac-Toe AI</title>
        <link rel = 'stylesheet' type = 'text/css' href = 'styles/ui.css'>
    </head>

    <body>
			
        <div class = 'main-container'>
		<!-- choice to select X or O -->
		 <div class= 'choice'>
				<div class = 'x' ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="cross.png" draggable="true" ondragstart="drag(event)" id="drag1" width="50" height="50"></div>
				<div class = 'o'  ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="Zero.png" draggable="true" ondragstart="drag(event)" id="drag2" width="60" height="60"></div>
			</div>
			
            <div class = 'board'>
                <!-- data-indx following cell divs represents cell index in 1D array representation -->
                <div class='cell' data-indx = "0" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell0"></div>
                <div class='cell' data-indx = "1" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell1"></div>
                <div class='cell' data-indx = "2" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell2"></div> 
				<div class='cell' data-indx = "3" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell3"></div>
                <div class='cell' data-indx = "4" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell4"></div>
                <div class='cell' data-indx = "5" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell5"></div>
                <div class='cell' data-indx = "6" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell6"></div>
                <div class='cell' data-indx = "7" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell7"></div>
                <div class='cell' data-indx = "8" ondrop="drop(event)" ondragover="allowDrop(event)" id="cell8"></div>
			</div>
			 
			
			
            <div class = 'control'>
                <!-- div.intial displays the starting controls -->
                <div class = 'intial'>
                    <div class = 'difficulty'>
                        <span class = 'level not-selected' id = "blind">Blind</span>
                        <span class = 'level not-selected' id = "novice">Novice</span>
                        <span class = 'level not-selected' id = "master">Master!</span>
                    </div>

                    <div class='start'> Start </div>
                </div>

                <!-- div.ingame displays in-game messages and controls -->
                <div class = 'ingame' id="human">It's your turn ...</div>
                <div class = 'ingame' id="ai">
                    <img src = "imgs/robot.png" id = "robot" class = "robot" />
                    <p>Waint for it ...</p>
                </div>
                <div class = 'ingame' id="won">You won !</div>
                <div class = 'ingame' id="lost">You lost !</div>
                <div class = 'ingame' id="draw">It's a Draw</div>
            </div>
        </div>

        <script src = "scripts/jquery-1.10.1.min.js"></script>
        <script src = "scripts/ui.js"></script>
        <script src = "scripts/game.js"></script>
        <script src = "scripts/ai.js"></script>
        <script src = "scripts/control.js"></script>

    </body>
</html>
