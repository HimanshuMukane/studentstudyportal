<?php
$connect = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($connect, "studyportal");

$sel = "SELECT * FROM `resume` ";
$qrydisplay = mysqli_query($connect, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
	$contact  =  $row['contact'];
	$name  =  $row['name'];
	$email  =  $row['email'];
	$designation  =  $row['designation'];
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Resume Generator</title>
    <link rel='stylesheet' href='cv.css'>
</head>

<body translate="no">
    <button id="printhide" onClick="window.print();">Print</button>
    <section style="border-radius: 4px; box-shadow: gray 1px 1px 3px 2px; overflow: hidden;" title="This is a sample resume. Click to edit. Use Tab key to go to next input box. You can add/remove any element you like. Press CTRL+P to save as PDF!">
        <!-- 	<div class="page-break"></div> -->
        <article id="content2">
            <table class="psnl-info">
                <tbody>
                    <tr>
                        
                        <td rowspan="2" class="text-left" contenteditable>Tel: <?php echo $contact; ?></td>
                        <td class="text-center font-20" contenteditable><?php echo $name; ?></td>
                        <td rowspan="2" class="text-right" contenteditable><?php echo $email; ?><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94fcf5e6fbf8f0f6fde6f0a6a7a7d4f3f9f5fdf8baf7fbf9">[email&#160;protected]</a></td>
                    </tr>
                    <tr>
                        <td class="text-center font-20" contenteditable><?php echo $designation; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-center font-18" contenteditable>(from <em>Person of Interest</em>)</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            
            <div class="rsm-header">
                <h2 contenteditable>Work Experience</h2>
                <hr>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>N/A</div>
                        <div contenteditable>Billionaire</div>
                    </div>
                    <div class="text-right font-10">
                        <div contenteditable>??? - 2016</div>
                        <div contenteditable>Mumbai</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-mid" contenteditable>
                    His source of wealth is unknown yet reliable.
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>Develop an all-seeing AI:</p>
                    <ul>
                        <li contenteditable>Taught the Machine to save everyone</li>
                        <li contenteditable>Taught the Machine how to play chess</li>
                    </ul>
                    <p contenteditable>Save the irrelevant numbers:</p>
                    <ul>
                        <li contenteditable>Identify the irrelevant number as victim or perpetrator</li>
                        <li contenteditable>Saved everyone</li>
                        <li contenteditable>Failed to save himself</li>
                    </ul>
                </div>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>Universal Heritage Insurance</div>
                        <div contenteditable>Insurance Underwriter</div>
                    </div>
                    <div class="text-right font-10">
                        <div contenteditable>??? - 2016</div>
                        <div contenteditable>Mumbai</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-mid" contenteditable>
                    An insurance company.
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>Work as an investigator:</p>
                    <ul>
                        <li contenteditable>Approach families of the numbers and collect relevant information, sometimes provide anonymous financial aid</li>
                    </ul>
                    <p contenteditable>Save the irrelevant numbers:</p>
                    <ul>
                        <li contenteditable>Identify the irrelevant number as victim or perpetrator</li>
                    </ul>
                </div>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>IFT, Inc.</div>
                        <div contenteditable>Software Engineer</div>
                    </div>
                    <div class="text-right font-10">
                        <div contenteditable>2013 - 2011</div>
                        <div contenteditable>Mumbai</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-mid" contenteditable>
                    This company receives a reputation as a world leader in computer technology.
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>Work as a low-level employee:</p>
                    <ul>
                        <li contenteditable>Pretend to be inefficient in coding</li>
                        <li contenteditable>Constantly disappearing from work</li>
                    </ul>
                    <p contenteditable>Secretly being a high level executive:</p>
                    <ul>
                        <li contenteditable>Hired someone secretly(220)</li>
                        <li contenteditable>Fired himself secretly(102)</li>
                    </ul>
                </div>
            </div>

            <div class="rsm-header">
                <h2 contenteditable>Education</h2>
                <hr>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>Massachusetts Institute of Technology</div>
                        <div contenteditable>Engineering</div>
                    </div>
                    <div class="text-right font-10">
                        <div contenteditable>2010 - 2013</div>
                        <div contenteditable>Mumbai</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>Education highlights:</p>
                    <ul>
                        <li contenteditable>Dropout</li>
                    </ul>
                </div>
            </div>
            <div class="rsm-header">
                <h2 contenteditable>Professional Skills</h2>
                <hr>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>Hacking skills</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>C language, etc</p>
                    <ul>
                        <li contenteditable>Instructed a student on building a large program once in an undercover mission when he pretended to be a math teacher</li>
                    </ul>
                </div>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>Financial knowledge</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>Expert in stock market manipulation</p>
                    <ul>
                        <li contenteditable>Short sold a medical company's stocks</li>
                        <li contenteditable>Prevented a financial crisis in a stock exchange</li>
                    </ul>
                </div>
            </div>
            <div class="rsm-cmpnt">
                <div class="rsm-cmpnt-top">
                    <div class="text-left">
                        <div contenteditable>People skills</div>
                    </div>
                </div>
                <div class="rsm-cmpnt-btm">
                    <p contenteditable>Compassion and selfless love</p>
                    <ul>
                        <li contenteditable>"Human-interaction" is said to not be his best strength, however Finch has demonstrated his kindness and caring for all man-kind, including those posing against him</li>
                    </ul>
                </div>
            </div>
        </article>
    </section>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        var sc_project = 11722433;
        var sc_invisible = 1;
        var sc_security = "7fc26bb9";
    </script>
    <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
	<div class="statcounter"><a title="Web Analytics" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/11722433/0/7fc26bb9/1/" alt="Web Analytics"></ a>
	</div>
</noscript>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93200375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
    <script id="rendered-js">
        var addDropBtn = "<div id=\"addDropBtn\"><div id=\"dropBtn\">－</div>&nbsp;<div id=\"addBtn\">＋</div></div>";
        $("body").append(addDropBtn);
        var isCtrlDown = false;
        $("body").on("keydown", function(e) {
            if (e.keyCode == 17) {
                isCtrlDown = true;
            } else if (e.keyCode == 80 && isCtrlDown) {
                //adjust printing styles
                $("section").css("margin", 0);
                $("body").css("background", "white");
                $("#addDropBtn").hide();
                $(".page-break").hide();
                $("article").css("padding", 0);
                $(":focus").blur();
                window.print();
                //adjust back to preview styles
                $("section").css("margin", "50px auto");
                $("body").css("background", "black");
                $(".page-break").show();
                $("article").css("padding", 36);
                return false;
            }
        });
        $("body").on("keyup", function(e) {
            if (e.keyCode == 17) {
                isCtrlDown = false;
            }
        });
        $("body").on("keydown", "[contenteditable]", function(e) {
            if (e.keyCode == 13) {
                e.preventDefault(); //prevent line break
                $(this).blur();
            }
        });
        $("body").on("paste", "[contenteditable]", function(event) {
            var e = event || window.event;
            e.preventDefault();
            var text = (e.originalEvent || e).clipboardData.getData('text/plain') || prompt('在这里输入文本');
            document.execCommand("insertText", false, text || ""); //paste as plain text
        });
        // object to store add_drop element
        var ele_to_be_addDroped = {
            cmpnt_index: 0,
            cmpnt_p_index: 0,
            cmpnt_li_index: 0,
            ele: ""
        };

        function addDropBtn_right(a) { // the distance between addDropBtn and right window edge
            return $(window).width() - ($(a).offset().left + $(a).outerWidth());;
        }
        $("body").on("mouseenter", ".rsm-cmpnt", function() {
            var that = this;
            ele_to_be_addDroped.cmpnt_index = $(".rsm-cmpnt").index(this); //overall index, not by category
            ele_to_be_addDroped.ele = this;
            $("#addDropBtn").css("top", $(that).offset().top - $(window).scrollTop() - 2);
            $("#addDropBtn").css("right", addDropBtn_right(that) + 4);
            $("#addBtn").attr("class", "cmpnt-btn");
            $("#dropBtn").attr("class", "cmpnt-btn");
            if (!$(this).prev().hasClass("rsm-header")) { //if component is the first in its category
                $("#dropBtn").show(); //only drop btn will be applicable
            } else {
                $("#dropBtn").hide();
            }
            $("#addDropBtn").show();
        });

        $("body").on("mouseleave", ".rsm-cmpnt", function() {
            $("#addDropBtn").hide();
        });
        $("body").on("mouseenter", ".rsm-cmpnt-btm p", function() {
            var that = this;
            ele_to_be_addDroped.cmpnt_index = $(".rsm-cmpnt").index($(that).parent().parent());
            ele_to_be_addDroped.cmpnt_p_index = $(this).index();
            ele_to_be_addDroped.ele = this;
            $("#addDropBtn").css("top", $(that).offset().top - $(window).scrollTop() - 3);
            $("#addDropBtn").css("right", addDropBtn_right(that) + 2);
            $("#addBtn").attr("class", "cmpnt-p-btn");
            $("#dropBtn").attr("class", "cmpnt-p-btn");
            if ($(this).index()) {
                $("#dropBtn").show();
            } else {
                $("#dropBtn").hide();
            }
            $("#addDropBtn").show();
        });
        $("body").on("mouseleave", ".rsm-cmpnt-btm p", function() {
            $("#addDropBtn").hide();
        });
        $("body").on("mouseenter", ".rsm-cmpnt-btm li", function() {
            var that = this;
            ele_to_be_addDroped.cmpnt_index = $(".rsm-cmpnt").index($(that).parent().parent().parent());
            ele_to_be_addDroped.cmpnt_p_index = $(this).parent().prev().index();
            ele_to_be_addDroped.cmpnt_li_index = $(this).index();
            ele_to_be_addDroped.ele = this;
            $("#addDropBtn").css("top", $(that).offset().top - $(window).scrollTop() - 3);
            $("#addDropBtn").css("right", addDropBtn_right(that) + 2);
            $("#addBtn").attr("class", "cmpnt-li-btn");
            $("#dropBtn").attr("class", "cmpnt-li-btn");
            if ($(this).index()) {
                $("#dropBtn").show();
            } else {
                $("#dropBtn").hide();
            }
            $("#addDropBtn").show();
        });
        $("body").on("mouseleave", ".rsm-cmpnt-btm li", function() {
            $("#addDropBtn").hide();
        });
        $("body").on("mouseover", "#addDropBtn", function() {
            $("#addDropBtn").show();
        });
        $("body").on("mouseleave", "#addDropBtn", function() {
            $("#addDropBtn").hide();
        });
        $("body").on("click", "#dropBtn", function() {
            var targetEle;
            if (ele_to_be_addDroped.ele.tagName == "DIV") {
                targetEle = $(".rsm-cmpnt").eq(ele_to_be_addDroped.cmpnt_index);
            } else if (ele_to_be_addDroped.ele.tagName == "P") {
                let div = $(".rsm-cmpnt").eq(ele_to_be_addDroped.cmpnt_index);
                targetEle = $(div).children(".rsm-cmpnt-btm").children().eq(ele_to_be_addDroped.cmpnt_p_index);
                $(targetEle).next().remove(); // remove ul element next to p element
            } else if (ele_to_be_addDroped.ele.tagName == "LI") {
                let div = $(".rsm-cmpnt").eq(ele_to_be_addDroped.cmpnt_index);
                let p = $(div).children(".rsm-cmpnt-btm").children().eq(ele_to_be_addDroped.cmpnt_p_index);
                targetEle = $(p).next().children().eq(ele_to_be_addDroped.cmpnt_li_index);
            }
            $(targetEle).remove();
            $("#addDropBtn").hide();
        });
        $("body").on("click", "#addBtn", function() {
            var targetEle, newEle;
            if (ele_to_be_addDroped.ele.tagName == "DIV") {
                newEle = $(".rsm-cmpnt").eq(ele_to_be_addDroped.cmpnt_index).prop('outerHTML');
                targetEle = $(".rsm-cmpnt").eq(ele_to_be_addDroped.cmpnt_index);
            } else if (ele_to_be_addDroped.ele.tagName == "P") {
                let tempEle = ele_to_be_addDroped.ele;
                targetEle = $(tempEle).next();
                newEle = $(tempEle).prop("outerHTML") + $(targetEle).prop("outerHTML");
            } else if (ele_to_be_addDroped.ele.tagName == "LI") {
                let div = $(".rsm-cmpnt").eq(ele_to_be_addDroped.cmpnt_index);
                let p = $(div).children(".rsm-cmpnt-btm").children().eq(ele_to_be_addDroped.cmpnt_p_index);
                targetEle = $(p).next().children().eq(ele_to_be_addDroped.cmpnt_li_index);
                newEle = $(targetEle).prop("outerHTML");
            }
            $(targetEle).after(newEle);
            $("#addDropBtn").hide();
        });
        $("body").on("mouseenter", "[contenteditable]", function() {
            $(this).focus();
        });
    </script>



</body>

</html>