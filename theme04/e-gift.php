<div class="groupcontent groupcontent_pages">
              <div class="content">
                <div class="egiftrow" style="margin-bottom: 10px;">
                  <div id="ValidationSummary1" style="color:Red;display:none;"></div>
                </div>
                <div id="egifttopnote">Please choose a design and add input e-gift information:</div>
                <div class="egiftrow"><a name="preview"></a>
                  <div class="card_m">
                    <div style="text-align: center; background: #f1f1f1;">
                      <div id="egiftsalonname" style="color: #000; font-size: 18pt;							font-family: 'Cantora One', sans-serif;">Nail Salon</div>
                      <div style="color: #000; font-size: 12pt; margin-top: 10px;"><b>Serial Number: XXXXXX</b></div>
                    </div>
                    <div id="cardimg"><img id="egiftImg" src="./images/gift1.jpg" alt="egift"></div>
                    <div id="egiftmessagegroup">
                      <div style="min-height: 120px; padding: 2px;">
                        <div style="margin-bottom: 5px; clear: both;">
                          <div id="from"><strong>From</strong>:</div>
                        </div>
                        <div style="margin-bottom: 5px; clear: both;">
                          <div id="to"><strong>To</strong>:</div>
                        </div>
                        <div style="margin-bottom: 5px; clear: both;">
                          <div id="amount"><strong>Amount</strong>: $</div>
                        </div>
                        <div style="margin-bottom: 5px; clear: both;">
                          <div id="message"><strong>Message</strong>:</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="egiftlibrary"><img style="border: 2px solid #bc5b1b;" src="./images/gift1.jpg" alt="Bollinger 10" name="backsmallimg" onclick="changebackground(0,&quot;gift1.jpg&quot;,145,&quot;#000000&quot;);"><img src="./images/gift2.jpg" alt="Bollinger 9" name="backsmallimg" onclick="changebackground(1,&quot;gift2.jpg&quot;,113,&quot;#000000&quot;);"><img src="./images/gift3.jpg" alt="Bollinger 9" name="backsmallimg" onclick="changebackground(2,&quot;gift3.jpg&quot;,112,&quot;#000000&quot;);"><img src="./images/gift4.jpg" alt="Bollinger 5" name="backsmallimg" onclick="changebackground(3,&quot;gift4.jpg&quot;,107,&quot;#000000&quot;);"><img src="./images/gift5.jpg" alt="Bollinger 5" name="backsmallimg" onclick="changebackground(4,&quot;gift5.png&quot;,67,&quot;#ffffff&quot;);"><img src="./images/gift6.jpg" alt="Bollinger 4" name="backsmallimg" onclick="changebackground(5,&quot;gift6.png&quot;,66,&quot;#000000&quot;);"><img src="./images/gift7.jpg" alt="Bollinger 3" name="backsmallimg" onclick="changebackground(6,&quot;gift7.png&quot;,65,&quot;#ffffff&quot;);"><img src="./images/gift8.jpg" alt="Bollinger 2" name="backsmallimg" onclick="changebackground(7,&quot;gift8.png&quot;,64,&quot;#000000&quot;);"><img src="./images/gift9.jpg" alt="Bollinger 1" name="backsmallimg" onclick="changebackground(8,&quot;gift9.png&quot;,63,&quot;#000000&quot;);"></div>
                <div class="egiftrow" style="border-bottom: 1px dashed #e5e5e5;"></div>
                <h3>Information:</h3>
                <div class="egiftrow">Amount ($)*:<br>
                  <input class="textbox" id="TextBox2" name="TextBox2" type="text"><span id="RequiredFieldValidator4" style="color:#FF9933;visibility:hidden;">
                    *Please input
                    the amount</span><span id="RegularExpressionValidator2" style="color:#FF9933;visibility:hidden;">
                    *Invalid
                    amount</span>
                </div>
                <div class="egiftrow">Your name (First & Last Name)*:<br>
                  <input class="textbox" id="TextBox3" name="TextBox3" type="text"><span id="Requiredfieldvalidator1" style="color:#FF9933;visibility:hidden;">
                    *Please enter
                    your name.</span>
                </div>
                <div class="egiftrow">Your Email*:<br>
                  <input class="textbox" id="TextBox4" name="TextBox4" type="text"><span id="Requiredfieldvalidator3" style="color:#FF9933;visibility:hidden;">
                    *Please enter
                    your email adress.</span><span id="valRegular" style="color:#FF9933;display:none;">*Invalid Email Address.</span>
                </div>
                <div class="egiftrow">Recipient (First & Last Name):<br>
                  <input class="textbox" id="TextBox1" name="TextBox1" type="text">
                </div>
                <div class="egiftrow">Recipient's Email*:<br>
                  <input class="textbox" id="TextBox6" name="TextBox6" type="text"><span id="Requiredfieldvalidator2" style="color:#FF9933;visibility:hidden;">
                    *Please enter
                    recipient's email adress.</span><span id="Regularexpressionvalidator1" style="color:#FF9933;display:none;">
                    *Invalid Email
                    Address.</span>
                </div>
                <div class="egiftrow">Recipient's Phone Number*:<br>
                  <input class="textbox" id="TextBox8" name="TextBox8" type="text"><span id="Requiredfieldvalidator5" style="color:#FF9933;visibility:hidden;">
                    *Please enter
                    recipient's phone number.</span><br><span style="font-size: 9pt;">
                    *Egift will be sent to this number if you input this
                    field.</span>
                </div>
                <div class="egiftrow">Message (160 characters):<br>
                  <textarea class="textbox2" id="TextArea1" name="TextArea1" onkeyup="countChars('TextArea1',160);" onblur="countChars('TextArea1',160);"></textarea>
                </div>
                <div class="egiftrow" style="height: 270px;">Deliver this gift on:<br>
                  <script type="text/javascript">
                    //<![CDATA[
                    Sys.WebForms.PageRequestManager._initialize('ToolkitScriptManager1', 'form1', ['tUpdatePanel1', ''], [], [], 90, '');
                    //]]>
                  </script>
                  <div id="UpdatePanel1">
                    <input class="textbox" id="TextBox5" name="TextBox5" type="text" value="08/17/2018">
                  </div>
                  <div style="margin-top: 20px;">
                    <input class="searchbutton" type="button" onclick="preview();" value="Preview"><br><br> *3% Processing Fee Will Be Charged<br><br>
                    <input id="ImageButton2" type="image" name="ImageButton2" src="images/paypal-checkout.png" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ImageButton2&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;cursor:pointer;">
                    <div style="display: none;">
                      <input id="TextBox7" name="TextBox7" type="text" style="color:Black;">
                    </div>
                  </div>
                  <div style="margin-top: 10px;">*E-Gift can be used at all of our locations"</div>
                  <div class="egiftrow" style="border-bottom: 1px dashed #e5e5e5;"></div>
                  <div id="previewdiv"></div>
                </div>
              </div>
            </div>

            <script type="text/javascript">
            function changebackground(id, img, backid) {
            var cCount = "";
            cCount = document.getElementsByName("backsmallimg").length;
            var chk;
            chk = document.getElementsByName("backsmallimg");
            for (i = 0; i < cCount; i++) {
            if (i == id) {
            chk[i].style.border = "2px solid #bc5b1b";
            document.getElementById("egiftImg").src = "./images/" + img;
            }
            else {
            chk[i].style.border = "2px solid #e5e5e5";
            }
            }
            document.getElementById("TextBox7").value = backid;
            }
            function countChars(textbox, max) {
            var count = max - document.getElementById(textbox).value.length;
            if (count < 0) {
            document.getElementById(textbox).value = document.getElementById(textbox).value.substring(0, max);
            }
            }
            function preview() {
            document.getElementById("from").innerHTML = "<strong>From:</strong> " + document.getElementById("TextBox3").value;
            document.getElementById("to").innerHTML = "<strong>To:</strong> " + document.getElementById("TextBox1").value;
            document.getElementById("amount").innerHTML = "<strong>Amount: $</strong> " + document.getElementById("TextBox2").value;
            document.getElementById("message").innerHTML = "<strong>Message:</strong> " + document.getElementById("TextArea1").value;
            document.location.href = "#preview";
            }
            	
          </script>