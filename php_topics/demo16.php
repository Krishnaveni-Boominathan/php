<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
        $(document).ready(function(){
        $("#button").click(function(){
            $("p").hide();
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#test1").click(function(){
            $("#test").hide();
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $(".test3").click(function(){
            $(".test2").hide();
        });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#test4").dblclick(function(){
                $(this).hide();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#test5").mouseenter(function(){
                alert("mouse enter");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#test6").mouseleave(function(){
                alert("mouse leave");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#test7").mousedown(function(){
                alert("mouse down");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#test8").mouseup(function(){
                alert("mouse up");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#test9").hover(function(){
            alert("You entered para!");
        },
        function(){
            alert("Bye! You now leave para!");
        }); 
        });
    </script>
    <script>
        $(document).ready(function(){
        $("input").focus(function(){
            $(this).css("background-color", "yellow");
        });
        $("input").blur(function(){
            $(this).css("background-color", "lightblue");
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#test10").on({
            mouseenter: function(){
            $(this).css("background-color", "lightgray");
            },  
            mouseleave: function(){
            $(this).css("background-color", "lightblue");
            }, 
            click: function(){
            $(this).css("background-color", "yellow");
            }  
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#hide").click(function(){
            $("#test11").hide();
        });
        $("#show").click(function(){
            $("#test11").show();
        });
        });
    </script>
     <script>
        $(document).ready(function(){
        $("#hide1").click(function(){
            $("#test12").hide(1000);
        });
        });
    </script>
     <script>
        $(document).ready(function(){
            $("#hide2").click(function(){
            $("#test13").hide();
        });
        $("#show1").click(function(){
            $("#test13").show(1000);
        });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#toggle").click(function(){
            $("#test14").toggle();
          });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button1").click(function(){
            $("#div1").fadeIn();
            $("#div2").fadeIn("slow");
            $("#div3").fadeIn(3000);
          });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button2").click(function(){
            $("#div4").fadeOut();
            $("#div5").fadeOut("slow");
            $("#div6").fadeOut(3000);
          });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button3").click(function(){
            $("#div7").fadeToggle();
            $("#div8").fadeToggle("slow");
            $("#div9").fadeToggle(3000);
          });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button4").click(function(){
            $("#div10").fadeTo("slow", 0.15);
            $("#div11").fadeTo("slow", 0.4);
            $("#div12").fadeTo("slow", 0.7);
          });
        });
    </script>
    <script> 
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideDown("slow");
          });
        });
    </script>
    <script> 
        $(document).ready(function(){
          $("#flip1").click(function(){
            $("#panel1").slideUp("slow");
          });
        });
    </script>
    <script> 
        $(document).ready(function(){
          $("#flip2").click(function(){
            $("#panel2").slideToggle("slow");
          });
        });
    </script>
    <script> 
        $(document).ready(function(){
        $("#button5").click(function(){
            $("#div13").animate({left: '250px',opacity: '0.5',height: '150px',width: '150px'});
        });
        });
    </script> 
    <script> 
        $(document).ready(function(){
        $("#button6").click(function(){
            $("#div14").animate({height: 'toggle'});
        });
        });
    </script> 
    <script> 
        $(document).ready(function(){
        $("#button7").click(function(){
            var div = $("#div15");
            div.animate({height: '300px', opacity: '0.4'}, "slow");
            div.animate({width: '300px', opacity: '0.8'}, "slow");
            div.animate({height: '100px', opacity: '0.4'}, "slow");
            div.animate({width: '100px', opacity: '0.8'}, "slow");
        });
        });
    </script> 
    <script> 
            $(document).ready(function(){
            $("#button8").click(function(){
                var div = $("#div16");  
                div.animate({left: '100px'}, "slow");
                div.animate({fontSize: '3em'}, "slow");
            });
            });
    </script> 
    <script> 
        $(document).ready(function(){
          $("#flip3").click(function(){
            $("#panel3").slideDown(5000);
          });
          $("#stop").click(function(){
            $("#panel3").stop();
          })
        });
    </script>
    <style> 
        #panel3, #flip3 {
          padding: 5px;
          font-size: 18px;
          text-align: center;
          background-color: #555;
          color: white;
          border: solid 1px #666;
          border-radius: 3px;
        }       
        #panel3 {
          padding: 50px;
          display: none;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#button9").click(function(){
                $("#callback").hide("slow", function(){
                    alert("hidden");
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button10").click(function(){
                $("#chain").css("color", "violet")
                .slideUp(2000)
                .slideDown(2000);
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button11").click(function(){
                alert("Text: "+ $("#test15").text());
            });
            $("#button12").click(function(){
                alert("HTML: "+ $("#test15").html());
            });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#button13").click(function(){
            alert("Value: " + $("#test16").val());
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#button14").click(function(){
            alert($("#w3s").attr("href"));
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#button15").click(function(){
            $("#test17").text("Hello world!");
        });
        $("#button16").click(function(){
            $("#test18").html("<i>Hello world!</i>");
        });
        $("#button17").click(function(){
            $("#test19").val("Panda");
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#button18").click(function(){
            $("#w3s1").attr("href", "https://www.w3schools.com/jquery/");
        });
        });
    </script>
    <script>
        $(document).ready(function(){
        $("#button19").click(function(){
            $("#test20").append(" <i>Appended text</i>.");
        });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button20").click(function(){
            $("#test21").prepend("<i>Prepended text</i>. ");
          });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button21").click(function(){
                $("img").before("<i>Hello</i>");
            });
            $("#button22").click(function(){
            $("img").after("<i>After</i>");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button23").click(function(){
            $("#div17").remove();
          });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button24").click(function(){
            $("#div18").empty();
          });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button25").click(function(){
                $("#test22").addClass("blue");
            });
        });
    </script>
    <style>
        .blue{
            font-weight: italic;
            font-size: xx-large;
            color: blue;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#button26").click(function(){
                $("#test23").removeClass("blue");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button27").click(function(){
                $("#test24").toggleClass("blue");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button28").click(function(){
                alert("Background color = " + $("#test25").css("background-color"));
            });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button29").click(function(){
            $("#test26").css({"background-color": "yellow", "font-size": "200%"});
          });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button30").click(function(){
            var txt = "";
            txt += "Width of div: " + $("#div19").width() + "</br>";
            txt += "Height of div: " + $("#div9").height() + "</br>";
            txt += "Inner width of div: " + $("#div19").innerWidth() + "</br>";
            txt += "Inner height of div: " + $("#div19").innerHeight() + "</br>";
            txt += "Outer width: " + $("#div19").outerWidth() + "</br>";
            txt += "Outer height: " + $("#div19").outerHeight();
            $("#div19").html(txt);
            $("#div19").width(500).height(200);
          });
        });
    </script>
    <script>
        $(document).ready(function(){
         $("#button31").click(function(){
            $("#div22").load("demo_test.txt");
        });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("#button32").click(function(){
            $("#div23").load("demo_test.txt", function(responseTxt, statusTxt, xhr){
              if(statusTxt == "success")
                alert("External content loaded successfully!");
              if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
            });
          });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#button33").click(function(){
                $.get("demo_test1.php", function(data){
                    alert(data);
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
          $("form").submit(function(event){
            event.preventDefault(); // stop form from submitting normally
            var formValues = $(this).serialize();
            $.post("demo_test1_post.php",formValues,
            function(data){
              alert(data);
            });
          });
        });
    </script>
</head>
<body>

<h3>Element selector [$("p")]</h3>
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>
    <p id="button">Click me to hide paragraphs</p>
    <h3>id selector [$("#test")]</h3>
    <h4 id="test">paragraph</h4>
    <h4 id="test1">click me</h4>
    <h3>class selector [$(".test")]</h3>
    <h4 class="test2">Good morning</h4>
    <h4 class="test3">GM</h4>
    <h3>Events</h3>
    <h4><u>dblclick()</u></h4>
    <h4 id="test4">double click to disapper</h4>
    <h4><u>mouseenter()</u></h4>
    <h4 id="test5">enter the mouse pointer to disapper</h4>
    <h4><u>mouseleave()</u></h4>
    <h4 id="test6">leave the mouse pointer to disapper</h4>
    <h4><u>mousedown()</u></h4>
    <h4 id="test7">This is a paragraph1</h4>
    <h4><u>mouseup()</u></h4>
    <h4 id="test8">This is a paragraph2</h4>
    <h4><u>hover()</u></h4>
    <h4 id="test9">This is a paragraph3</h4>
    <h4><u>focus() & blur()</u></h4>
    Name: <input type="text" name="fullname"><br>
    Email: <input type="text" name="email">
    <h4><u>on()</u></h4>
    <h4 id="test10">This is a paragraph4</h4>   
    <h3>hide() & show()</h3>
    <p id="test11">If you click on the "Hide" button, I will disappear.</p>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
    <h3>hide(speed)</h3>
    <p id="test12">If you click on the "Hide" button, I will disappear.</p>
    <button id="hide1">Hide</button>
    <h3>show(speed)</h3>
    <p id="test13">If you click on the "show" button, I will appear.</p>
    <button id="hide2">Hide</button>
    <button id="show1">Show</button>
    <h3>toggle()</h3>
    <h4 id="toggle">Toggle between hide and show</h4>
    <h4 id="test14">Lorem ipsum dolor sit amet, consectetur adip.</h4>
    <h3>Fade</h3>
    <h4><u>fadeIn()</u></h4>
    <h3 id="button1">Click to fade in boxes</h3><br>
    <div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
    <div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
    <div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
    <h4><u>fadeOut()</u></h4>
    <h3 id="button2">Click to fade out boxes</h3><br>
    <div id="div4" style="width:80px;height:70px;background-color:red;"></div><br>
    <div id="div5" style="width:80px;height:80px;background-color:green;"></div><br>
    <div id="div6" style="width:80px;height:80px;background-color:blue;"></div>
    <h4><u>fadeToggle()</u></h4>
    <h3 id="button3">Click to fade in/out boxes</h3><br>
    <div id="div7" style="width:80px;height:80px;background-color:red;"></div>
    <br>
    <div id="div8" style="width:80px;height:80px;background-color:green;"></div>
    <br>
    <div id="div9" style="width:80px;height:80px;background-color:blue;"></div>
    <h4><u>fadeTo()</u></h4>
    <h3 id="button4">Click to fade boxes</h3><br>
    <div id="div10" style="width:80px;height:80px;background-color:red;"></div>
    <br>
    <div id="div11" style="width:80px;height:80px;background-color:green;"></div>
    <br>
    <div id="div12" style="width:80px;height:80px;background-color:blue;"></div><br>
    <div id="flip">Click to slide down panel</div>
    <div id="panel" style="display: none;">Hello world!</div><br>
    <div id="flip1">Click to slide up panel</div>
    <div id="panel1">Hello world!</div><br>
    <div id="flip2">Click to slide down/up panel</div>
    <div id="panel2" style="display: none;">Hello world!</div><br>
    <h3 id="button5">Start Animation</h3>
    <div id="div13" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div><br><br><br><br><br><br>
    <h3 id="button6">Start Animation</h3>
    <div id="div14" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div><br><br><br><br><br><br>
    <h3 id="button7">Start Animation</h3>
    <div id="div15" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div><br><br><br><br><br><br>
    <h3 id="button8">Start Animation</h3>
    <div id="div16" style="background:#98bf21;height:100px;width:100px;position:absolute;">Hello</div><br><br><br><br><br><br>
    <h3 id="stop">Stop sliding</h3>
    <div id="flip3">Click to slide down/up panel</div>
    <div id="panel3" >Hello world!</div><br>
    <h3>Callback</h3>
    <h3 id="button9">Hide</h3>
    <h4 id="callback">paragraph with content</h4>
    <h3>chaning</h3>
    <h4 id="button10">Click me</h4>
    <h4 id="chain">Funnnnn!!!!</h4>
    <h3>Get content</h3>
    <h4><u>text() & html()</u></h4>
    <h4 id="test15">This is some <b>bold</b> text in paragraph</h4>
    <h4 id="button11">Show text</h4>
    <h4 id="button12">Show html</h4>
    <h4><u>val()</u></h4>
    <h4>Name: <input type="text" id="test16" value="panda"></h4>
    <h4 id="button13">Show Value</h4>
    <h3>Get attribute</h3>
    <h4><u>attr()</u></h4>
    <h4><a href="https://www.w3schools.com/jquery/default.asp" id="w3s">jQuery</a></h4>
    <h4 id="button14">Show href value</h4>
    <h3>Set content</h3>
    <h4><u>text(), html() & val()</u></h4>
    <h4 id="test17">This is a paragraph</h4>
    <h4 id="test18">This is a another paragraph</h4>
    <h4>Name: <input type="text" id="test19" value="polar beer"></h4>
    <h4 id="button15">set text</h4>
    <h4 id="button16">set html</h4>
    <h4 id="button17">set value</h4>
    <h3>set attr()</h3>
    <h4><a href="https://www.w3schools.com" id="w3s1">W3Schools.com</a></h4>
    <h4 id="button18">Change href Value</h4>
    <h3>Add elements</h3>
    <h4><u>append()</u></h4>
    <h4 id="test20">This is a another paragraph</h4>
    <h4 id="button19">Append text</h4>
    <h4><u>prepend()</u></h4>
    <h4 id="test21">This is a paragraph</h4>
    <h4 id="button20">prepend text</h4>
    <h4><u>after() & before()</u></h4>
    <img src="images.png" alt="image" width="100" height="140"><br>
    <h4 id="button21">Insert before</h4>
    <h4 id="button22">Insert after</h4>
    <h3>remove</h3>
    <div id="div17" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">
        This is some text in the div.
        <p>This is a paragraph in the div.</p>
        <p>This is another paragraph in the div.</p>        
    </div>
     <br>        
    <h4 id="button23">Remove div element</h4>
    <h3>empty</h3>
    <div id="div18" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">
        This is some text in the div.
        <p>This is a paragraph in the div.</p>
        <p>This is another paragraph in the div.</p>        
    </div>
     <br>        
    <h4 id="button24">empty div element</h4>
    <h2>addClass()</h2>
    <h4 id="test22">Add Heading</h4>
    <h4 id="button25">Add classes to element</h4>
    <h2>removeClass()</h2>
    <h4 id="test23" class="blue">Remove Heading</h4>
    <h4 id="button26">Remove classes to element</h4>
    <h2>toggleClass()</h2>
    <h4 id="test24">Toggle Heading</h4>
    <h4 id="button27">Toggle class element</h4>
    <h2>css()</h2>
    <h3><u>Return css</u></h3>
    <h4 style="background-color:#ff0000" id="test25">This is a paragraph.</h4>
    <h4 id="button28">Return background-color</h4>
    <h3><u>set css</u></h3>
    <h4 style="background-color:#00ff00" id="test26">This is a paragraph.</h4>
    <h4 id="button29">set background-color</h4>
    <h3>Ajax</h3>
    <h4><u>load()</u></h4>
    <div id="div22"><p>Let change this text.</p></div>
    <h4 id="button31">Get external content</h4>
    <h4><u>load() callback</u></h4>
    <div id="div23"><p>Let change this text.</p></div>
    <h4 id="button32">Get external content</h4>
    <h3>$get(), $post()</h3>
    <button id="button33">Send an HTTP GET request to a page and get the result back</button>
    <br><br>
    <form>
        Name: <input type="text" name="name"><br><br>
        City: <input type="text" name="city"><br><br>
        <input type="submit">
    </form>  
</body>
</html>