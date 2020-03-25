// jQuery like selection of elements.
window.$ = document.querySelectorAll.bind(document);

// Changes for  Firefox
if (navigator.userAgent.match(/firefox/i)) {
    // Unicode font sizes10
    let ffBtn = "font-weight: normal; font-size: 2em; margin-left: 0.3em;";
    $("#restart-symbol")[0].setAttribute("style", ffBtn);

    let ffwait = "line-height: 1em; font-size: 4em;";
    //$(".waiting")[0].setAttribute("style", ffwait);
}

/////////////////////////////////////////

// Sorted list of the 500 most common English words.
let wordList = ["Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck", ">xM+k", "NqvkNwr", "<ax", "bZ'oj", "vk'p;Z", "VsfyQksu", ">aMk", "bZa/ku", "nqjn'khZ", "Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck","Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck", ">xM+k", "NqvkNwr", "<ax", "bZ'oj", "vk'p;Z", "VsfyQksu", ">aMk", "bZa/ku", "nqjn'khZ", "Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck","Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck", ">xM+k", "NqvkNwr", "<ax", "bZ'oj", "vk'p;Z", "VsfyQksu", ">aMk", "bZa/ku", "nqjn'khZ", "Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck","Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck", ">xM+k", "NqvkNwr", "<ax", "bZ'oj", "vk'p;Z", "VsfyQksu", ">aMk", "bZa/ku", "nqjn'khZ", "Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck","Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck", ">xM+k", "NqvkNwr", "<ax", "bZ'oj", "vk'p;Z", "VsfyQksu", ">aMk", "bZa/ku", "nqjn'khZ", "Bhd", "?kfV;k", "vfuok;Z", "vk'khokZn", "NksVk", "fMCck"];

//////////////////////////////////////////

// Knuth-Fisher-Yates Shuffle
// http://bost.ocks.org/mike/shuffle/
function shuffle(array) {
    let m = array.length,
        t,
        i;
    // While there remain elements to shuffle…
    while (m) {
        // Pick a remaining element…
        i = Math.floor(Math.random() * m--);
        // And swap it with the current element.
        t = array[m];
        array[m] = array[i];
        array[i] = t;
    }
    return array;
}

// Add words to word-section

function addWords() {
    // clear existing word-section
    let wordSection = $("#word-section")[0];
   // wordSection.innerHTML = "";
    //$("#typebox")[0].value = "";
    var wll = wordList.length;
	 let tword = parseFloat($("#tword")[0].value);
    for (let i = 0; i < tword; i++) {
       // let words = wordList;
       let words = shuffle(wordList);
        let wordSpan = '<span>'+ words[i] +'</span>';
      //  wordSection.innerHTML += wordSpan;
    }
    // mark first word as current-word
   // wordSection.firstChild.classList.add("current-word");

    // mark last word with magic-box
    // let magicBox = document.createElement("DIV");
    // magicBox.classList.add("magic-box");
    // wordSection.appendChild(magicBox);
}

//////////////////////////////////////////

// Word Colors
let colorCurrentWord = " #dddddd";
let colorCorrectWord = "#93C572";
let colorIncorrectWord = "#e50000";

// Word Count and other data.
let dur = parseFloat($("#tdurat")[0].value) * 60 ;
let wordData = {
    seconds: dur,
    correct: 0,
    incorrect: 0,
    total: 0,
    typed: 0
};

//////////////////////////////////////////
// Initial implementation notes:
// next word on <space>, if empty, then set value=""
// after <space> if value == current-word, mark as correct-word
// else, mark as incorrect-word
// if value.length != current-word[:value.length], mark as incorrect-word
// else, mark as current-word
//////////////////////////////////////////

function checkWord(word) {
    let wlen = word.value.length;
    // how much we have of the current word.
    let current = $(".current-word")[0];
    let currentSubstring = current.innerHTML.substring(0, wlen);
    // check if we have any typing errors
    if (word.value.trim() != currentSubstring) {
        current.classList.add("incorrect-word-bg");
        return false;
    } else {
        current.classList.remove("incorrect-word-bg");
        return true;
    }
}

function submitWord(word) {
    // update current-word and
    // keep track of correct & incorrect words
    let current = $(".current-word")[0];

    if (checkWord(word)) {
        current.classList.remove("current-word");
        current.classList.add("correct-word-c");
        wordData.correct += 1;
    } else {
        current.classList.remove("current-word", "incorrect-word-bg");
        current.classList.add("incorrect-word-c");
        wordData.incorrect += 1;
    }
    // update wordData
    wordData.total = wordData.correct + wordData.incorrect;

    // make the next word the new current-word.
    current.nextSibling.classList.add("current-word");
}

function clearLine() {
    // remove past words once you get to the next line
    let wordSection = $("#word-section")[0];
    let current = $(".current-word")[0]; // second line (first word)
    let previous = current.previousSibling; // first line (last word)
    let children = $(".correct-word-c, .incorrect-word-c").length;

    // <span>'s on the next line have a greater offsetTop value
    // than those on the top line.
    // Remove words until the first word on the second line
    // is the fistChild of word-section.
    if (current.offsetTop > previous.offsetTop) {
        for (let i = 0; i < children; i++) {
            wordSection.removeChild(wordSection.firstChild);
        }
    }
}

function isTimer(seconds) {
    // BUG: page refresh with keyboard triggers onkeyup and starts timer
    // Use restart button to reset timer

    let time = seconds;
    // only set timer once
    let one = $("#timer > span")[0].innerHTML;
	let tdurat = $("#tdurat")[0].value+':00';
    if (one == tdurat) {
        let typingTimer = setInterval(() => {
            if (time <= 0) {
                clearInterval(typingTimer);
            } else {
                time -= 1;
                let timePad = time < 10 ? "0" + time : time; // zero padded
               /*  $("#timer > span")[0].innerHTML = `0:${timePad}`; */
			   var mm = Math.floor(timePad/60);
var ss = timePad%60;
if(mm===0 && ss ===0){clearInterval(typingTimer);}

if(ss<10){ss = ss < 10 ? "0" + ss : ss;}

$("#timer > span")[0].innerHTML = `${mm}:${ss}`;
            }
        }, 1000);//Interval
    } else if (one == "0:00") {
        return false;
    }
    return true;
}

function calculateWPM(data) {
    let { seconds, correct, incorrect, total, typed } = data;
    let min = seconds / 60;
    let wpm  = Math.ceil(((typed / 5) - incorrect) / min);
    let accuracy = Math.ceil(correct / total * 100);

    if (wpm < 0) {
        wpm = 0;
    } // prevent negative wpm from incorrect words
let user =  $("#result_user")[0].value;
    // template strings are pretty cool
    let f = 'share.php?f_'+wpm+'_'+accuracy+'_'+total+'_'+correct+'_'+typed;
    let t = 'share.php?t_'+wpm+'_'+accuracy+'_'+total+'_'+correct+'_'+typed;
 let g = 'share.php?g_'+wpm+'_'+accuracy+'_'+total+'_'+correct+'_'+typed;
   let results = `<div class="row nogap" id="results">
					<h5 class="text-center">${user} Test Result</h5>
					<div class="col-sm-6 text-center">
						<p>Speed: <span>${wpm} WPM</span></p>
						<p>Accuracy: <span>${accuracy}%</span></p>
						<p>You're better than all of users:<br/><span>${accuracy}%</span></p>
						<p>You're ranking in last 24hrs:<br/><span id="urank">18</span></p>
						<p><button class="btn btn-primary" tabindex="2" onclick="restartTest()"><i class="fa fa-refresh"></i>&ensp;Try Again</button></p>
					</div>
					<div class="col-sm-6">
						<ul>
							<i class="ti-cup"></i>
							<li id="results-stats">
							<table>
								<tbody>
								  <tr>
									<td colspan="2">Summary:</td>
								  </tr>
								  <tr>
									<td>Accuracy</td>
									<td>${accuracy}%</td>
								  </tr>
								  <tr>
									<td>Total Word</td>
									<td>${total}</td>
								  </tr>
								  <tr>
									<td>Correct Words</td>
									<td>${correct}</td>
								  </tr>
								  <tr>
									<td>Incorrect Words</td>
									<td>${incorrect}</td>
								  </tr>
								  <tr>
									<td>Characters Typed</td>
									<td>${typed}</td>
								  </tr>
								</tbody>
							</table>
							</li>
							<li class="text-left">
								Share It:&ensp;<span id="social"><a  target="_blank" href="${f}" class="btn btn-facebook btn-small-circle" title="Facebook"><i class="fa fa-facebook"></i></a><a  target="_blank" href="${t}" class="btn btn-twitter btn-small-circle" title="twitter"><i class="fa fa-twitter"></i></a><a  target="_blank" href="${g}" class="btn btn-google btn-small-circle" title="google"><i class="fa fa-google-plus"></i></a> </span>
							</li>
						</ul>
					</div>
				</div>`;

    //$("#word-section")[0].innerHTML = results;
   //$("#word-section")[0].innerHTML = "<div class='label label-success'>Test Completed!!</div>";
   //$("#word-section")[0].css("display", "none");
   document.getElementById("resultdiv").style.display = "block";
   document.getElementById("bbbx").style.display = "none";
    document.getElementById("type-section").style.display = "none";
	$("#ttresult")[0].innerHTML = results;
sendreport(wpm,accuracy,total,correct);
    // color code accuracy
    let wpmClass = $("li:nth-child(2) .wpm-value")[0].classList;
    if (accuracy > 80) {
        wpmClass.add("correct-word-c");
    } else {
        wpmClass.add("incorrect-word-c");
    }

    console.log(wordData);
}

function sendreport(wpm,accuracy,total,correct)
{
	let test_type = $("#test_type")[0].value;
	 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //alert(this.responseText);
      $("#urank")[0].innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "sendreport.php?wpm="+wpm+"&accuracy="+accuracy+"&total="+total+"&correct="+correct+"&test_type="+test_type, true);
  xhttp.send();


}

function calculateWPM1(data) {
    let { seconds, correct, incorrect, total, typed } = data;
    let min = seconds / 60;
    let wpm  = Math.ceil(((typed / 5) - incorrect) / min);
    let accuracy = Math.ceil(correct / total * 100);
    let cpm = Math.ceil(typed - incorrect / min);

    if (wpm < 0) {
        wpm = 0;
    }
	$("#count")[0].innerHTML = typed;
	$("#wpm")[0].innerHTML = wpm;
	$("#accuracy")[0].innerHTML = accuracy;
	$("#speed")[0].innerHTML = Math.ceil(typed - (incorrect * 5) / min);


}



function typingTest(e) {
    // Char:        Key Code:
    // <space>      32
    // <backspace>  8
    // <shift>      16
    // [A-Z]        65-90
    // [' "]        222

    // Get key code of current key pressed.
    e = e || window.event;
    let kcode = e.keyCode;
    let word = $("#typebox")[0];

    // check if empty (starts with space)
    if (word.value.match(/^\s/g)) {
        word.value = "";
    } else {
        // Only score when timer is on.
        if (isTimer(wordData.seconds)) {
            checkWord(word); // checks for typing errors while you type
            // <space> submits words
            if (kcode == 32) {
                submitWord(word); // keep track of correct / incorrect words
                clearLine(); // get rid of old words
                $("#typebox")[0].value = ""; // clear typebox after each word
            }
            wordData.typed += 1; // count each valid character typed
			calculateWPM1(wordData);
        } else {
            // Display typing test results.
            calculateWPM(wordData);
        }
    }
}

function restartTest() {
   document.getElementById("resultdiv").style.display = "none";
   document.getElementById("bbbx").style.display = "block";
    $("#typebox")[0].value = "";
    location.reload();
}


function nohighlight(){
        var chkPassport = document.getElementById("nohighlight");
        var xx = document.getElementById("word-section");
        if (chkPassport.checked) {
           xx.classList.add("plainn");
        } else {
           xx.classList.remove("plainn");
        }
}

function dontshowerror(){
        var chkPassport = document.getElementById("nomistakez");
        var yy = document.getElementById("word-section");
        if (chkPassport.checked) {
           yy.classList.add("plainn2");
        } else {
           yy.classList.remove("plainn2");
        }
}
