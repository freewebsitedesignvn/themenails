
    <script type="text/javascript">
        function changebackground(id, img, backid) {
            var cCount = "";
            cCount = document.getElementsByName("backsmallimg").length;
            var chk;
            chk = document.getElementsByName("backsmallimg");
            for (i = 0; i < cCount; i++) {
                if (i == id) {
                    chk[i].style.border = "2px solid #61b85a";
                    document.getElementById("egiftImg").src = "http://myesalon.com/image/egiftbackground/" + img;
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
    
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
        //Check so phone
        jQuery(function ($) {
            $("#TextBox8").mask("999-999-9999");
        });
    </script>

<link href="/WebResource.axd?d=crCuFbXfu8WJWPlFuJePFhJUaXb2fChOgJoev8tjCRR5EhMtCTRdy7DbqxI6qGPC28eVyG0yenQ9oaHNvAhsC8H_Yyln1MnQ9IbaxiP-H-mqZO2LTPKHK2JX28A5sOYgavQnnu_EBx9Lx0_5dNPN9A2&amp;t=635543658652656250" type="text/css" rel="stylesheet" /></head>

    <form name="form1" method="post" action="./egift" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
<div>
<input type="hidden" name="ToolkitScriptManager1_HiddenField" id="ToolkitScriptManager1_HiddenField" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJODgyODYzMDQzZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUMSW1hZ2VCdXR0b24y9WkuHUnP7RdlkTcRgGiSutrAcFR1vZ2cQ+KaUPK95Ss=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=nFfeYKbsmMpzO55Gx0mdURBZgUJOHATQagCW8fuXL5JpUC8f3m8eyC-hlkJPuaWL71iX-zAGcYnLIxfbsbRfFMZWFvpjE10wAyDDV2XHz2U1&amp;t=636041038380000000" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=_H-ofuKbdV5Sbbn4XD4XfBSTk3cJJK-GSTqMYLQdQ-Xyu8HO1KDJY3z1tMODdjxtbBm56By5sgO_XLTty2rJVzlcNtyFkNWgtrWvb1zYe8sOtwx9cI-IduRae8nMgiLy9rWdmyhsNmo3qXm1yTbCNCAvYAYwzTsCRuE0l-NFFY41&amp;t=c895100" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=PjYYwwhmwEfAKRGeTGycdzwSDITynHDKlfJRhltUVy9KQj7AZnvLUs2ASGWnWv1UqmM1X-vBrAifzLAWM92Lb2pck-uWy7SjsYgLJ5d7WkwQXzH8HzBeVG8BOn_9MYhhJ5FxudKyLdT4Ba11qfHjTQ2&amp;t=23c9c237" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=1ndbLA-y-WHofLf7HHP7-fY1mouk7-cJOOUzxU_k-lH8FsVuIrF2wTHSgiIjJcFk2oU1K3ehuBOeYxGS2mX-q5q8c6yElfR23QiFrXkmuubgEwciFMDc7u1uUX884fbXWaBW6MgVlm78xK9ov87VWw2&amp;t=23c9c237" type="text/javascript"></script>
<script src="/egift.aspx?_TSM_HiddenField_=ToolkitScriptManager1_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d4.1.7.123%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3a44981e4a-f654-4c69-b806-cb922fc13d56%3a475a4ef5%3aaddc6819%3a5546a2b%3ad2e10b12%3aeffe2a26%3a37e2e5c9%3a5a682656%3ac7029a2%3ae9e598a9" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C0F2AF1C" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAu87uNp9eGjpJPquiiMsEa2Hadc/p2FmfqYq2ZMY0d3c+4b++gR/L7u4jOLZG/Hp9VrF7gV+isKZD+YuU/zxdxzESCFkFW/RuhzY1oLb/NUVLqj351j4y4RhrTnxCpB/1Xz82P7qR1Xkm/inOg2weTm+CxUk8xX210xTeVYEF/TW41AodCUr7891sIvnWuWSKFizVftpmYJzgJTRuQ1U4NbDZICi+bwK0IwQkHqOK+uYgHVembC4/Y/GPMyBd78bLDWKM8yXR8plKNj58WZPtoe" />
</div>
    


            <div class="groupcontent">
                <div class="content">
                    <h2>E-Gift</h2>
                    


                    <!--Start gift code-->

                    <div id="homecontent">
                    
                    
                    <div class="contentdetail">
                        
                        <div class="egiftrow" style="margin-bottom: 10px;">
                            <div id="ValidationSummary1" style="color:Red;display:none;">

</div>
                        </div>
                        <div id="egifttopnote">
                            Please choose a design and input e-gift information:
                        </div>
                        <div class="egiftrow">
                            
                            <a name="preview"></a>
                            <div class="card_m">
                                    <div style="text-align: center; background: #f1f1f1;">
                                            <div id="egiftsalonname" style="color: #000; font-size: 18pt;
                                                font-family: 'Cantora One', sans-serif;">
                                                Imperial Salon & Day Spa</div>
                                            <div id="egifadd" style="color: #000; font-size: 10pt;">
                                                1425 Stafford Market Place Stafford, VA 22556 </div>
                                            <div id="egiftphone" style="color: #000; font-size: 10pt;">
                                                (540) 659-3707</div>
                                            <div style="color: #000; font-size: 12pt; margin-top: 10px;">
                                                <b>Serial Number: XXXXXX</b></div>
                                    </div>
                                    <div id="cardimg">
                                        <img id="egiftImg" src="http://myesalon.com/image/egiftbackground/2810201604647187.png" alt="egift"/>
                                    </div>
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
                                                    <div id="message"><strong>Message</strong>: </div>
                                                </div>
                                            </div>
                                  </div>
                            </div>

                            

                        </div>
                        <div id="egiftlibrary">
                            <img style='border: 2px solid #61b85a;' src='http://myesalon.com/image/egiftbackground/N_2810201604647187.png' alt='Imperial 1' name='backsmallimg' onclick='changebackground(0,"2810201604647187.png",72,"#ffffff");'/>
                            <img src='http://myesalon.com/image/egiftbackground/N_2810201604753250.png' alt='Imperial 2' name='backsmallimg' onclick='changebackground(1,"2810201604753250.png",73,"#000000");'/>
                            <img src='http://myesalon.com/image/egiftbackground/N_2810201604812750.png' alt='Imperial 3' name='backsmallimg' onclick='changebackground(2,"2810201604812750.png",74,"#000000");'/>
                            <img src='http://myesalon.com/image/egiftbackground/N_2810201604835437.png' alt='Imperial 4' name='backsmallimg' onclick='changebackground(3,"2810201604835437.png",75,"#000000");'/>
                        </div>
                        <div class="egiftrow" style="border-bottom: 1px dashed #e5e5e5;">
                        </div>
                        <h3>
                            Information:</h3>
                        <div class="egiftrow">
                            Amount ($)*:<br />
                            <input name="TextBox2" type="text" id="TextBox2" class="textbox" />
                            <span id="RequiredFieldValidator4" style="color:Red;visibility:hidden;">*Please input the amount</span>
                            <span id="RegularExpressionValidator2" style="color:Red;visibility:hidden;">*Invalid amount</span>
                        </div>
                        <div class="egiftrow">
                            Your name (First &amp; Last Name)*:<br />
                            <input name="TextBox3" type="text" id="TextBox3" class="textbox" />
                            <span id="Requiredfieldvalidator1" style="color:Red;visibility:hidden;">*Please enter your name.</span>
                        </div>
                        <div class="egiftrow">
                            Your Email*:<br />
                            <input name="TextBox4" type="text" id="TextBox4" class="textbox" />
                            <span id="Requiredfieldvalidator3" style="color:Red;visibility:hidden;">*Please enter your email adress.</span>
                            <span id="valRegular" style="color:Red;display:none;">*Invalid Email Address.</span>
                        </div>
                        <div class="egiftrow">
                            Recipient (First &amp; Last Name):<br />
                            <input name="TextBox1" type="text" id="TextBox1" class="textbox" />
                        </div>
                        <div class="egiftrow">
                            Recipient's Email*:<br />
                            <input name="TextBox6" type="text" id="TextBox6" class="textbox" />
                            <span id="Requiredfieldvalidator2" style="color:Red;visibility:hidden;">*Please enter recipient's email adress.</span>
                            <span id="Regularexpressionvalidator1" style="color:Red;display:none;">*Invalid Email Address.</span>
                        </div>
                        <div class="egiftrow">
                            Recipient's Phone Number*:<br />
                            <input name="TextBox8" type="text" id="TextBox8" class="textbox" />
                            <span id="Requiredfieldvalidator5" style="color:#FF9933;visibility:hidden;">*Please enter your Phone.</span>
                            <br /><span style="font-size: 9pt;">*Egift will be sent to this number if you input this field.</span>
                        </div>
                        <div class="egiftrow">
                            Message (160 characters):<br />
                            <textarea name="TextArea1" id="TextArea1" class="textbox gifttextarea" onkeyup="countChars(&#39;TextArea1&#39;,160);" onblur="countChars(&#39;TextArea1&#39;,160);"></textarea>
                        </div>
                        <div class="egiftrow" style="height: 250px;">
                            Deliver this gift on:<br />
                            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ToolkitScriptManager1', 'form1', ['tUpdatePanel1',''], [], [], 90, '');
//]]>
</script>

                            <div id="UpdatePanel1">
	
                                    
                                    <input name="TextBox5" type="text" value="07/31/2018" id="TextBox5" class="textbox" />
                                
</div>
                            <div style="margin-top: 20px;">
                                <input type="button" class="searchbutton" onclick="preview();" value="Preview" /><br /><br />
                                *3% Processing Fee Will Be Charged<br /><br />
                                <input type="image" name="ImageButton2" id="ImageButton2" src="images/paypal-checkout.png" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ImageButton2&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="border-width:0px;cursor:pointer;" />
                                
                                <div style="display: none;">
                                    <input name="TextBox7" type="text" id="TextBox7" style="color:Black;" />
                                </div>
                            </div>
                            <div class="egiftrow" style="border-bottom: 1px dashed #e5e5e5;">
                            </div>
                            <div id="previewdiv">
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;">
                    </div>
                </div>

                <!--End gift code-->




                </div>
            </div>

            


    <script type="text/javascript">
        document.getElementById("TextBox7").value = 72;
    </script>
    
<script type="text/javascript">
//<![CDATA[
var Page_ValidationSummaries =  new Array(document.getElementById("ValidationSummary1"));
var Page_Validators =  new Array(document.getElementById("RequiredFieldValidator4"), document.getElementById("RegularExpressionValidator2"), document.getElementById("Requiredfieldvalidator1"), document.getElementById("Requiredfieldvalidator3"), document.getElementById("valRegular"), document.getElementById("Requiredfieldvalidator2"), document.getElementById("Regularexpressionvalidator1"), document.getElementById("Requiredfieldvalidator5"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var RequiredFieldValidator4 = document.all ? document.all["RequiredFieldValidator4"] : document.getElementById("RequiredFieldValidator4");
RequiredFieldValidator4.controltovalidate = "TextBox2";
RequiredFieldValidator4.errormessage = "*Please input the amount";
RequiredFieldValidator4.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator4.initialvalue = "";
var RegularExpressionValidator2 = document.all ? document.all["RegularExpressionValidator2"] : document.getElementById("RegularExpressionValidator2");
RegularExpressionValidator2.controltovalidate = "TextBox2";
RegularExpressionValidator2.errormessage = "Invalid price";
RegularExpressionValidator2.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
RegularExpressionValidator2.validationexpression = "\\d+([-+.]\\d+)?";
var Requiredfieldvalidator1 = document.all ? document.all["Requiredfieldvalidator1"] : document.getElementById("Requiredfieldvalidator1");
Requiredfieldvalidator1.controltovalidate = "TextBox3";
Requiredfieldvalidator1.errormessage = "*Please enter your name.";
Requiredfieldvalidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
Requiredfieldvalidator1.initialvalue = "";
var Requiredfieldvalidator3 = document.all ? document.all["Requiredfieldvalidator3"] : document.getElementById("Requiredfieldvalidator3");
Requiredfieldvalidator3.controltovalidate = "TextBox4";
Requiredfieldvalidator3.errormessage = "*Please enter your email adress.";
Requiredfieldvalidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
Requiredfieldvalidator3.initialvalue = "";
var valRegular = document.all ? document.all["valRegular"] : document.getElementById("valRegular");
valRegular.controltovalidate = "TextBox4";
valRegular.errormessage = "*Please enter a valid email adress.";
valRegular.display = "Dynamic";
valRegular.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
valRegular.validationexpression = "^([a-zA-Z0-9_\\-])([a-zA-Z0-9_\\-\\.]*)@(\\[((25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\\.){3}|((([a-zA-Z0-9\\-]+)\\.)+))([a-zA-Z]{2,}|(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\\])$";
var Requiredfieldvalidator2 = document.all ? document.all["Requiredfieldvalidator2"] : document.getElementById("Requiredfieldvalidator2");
Requiredfieldvalidator2.controltovalidate = "TextBox6";
Requiredfieldvalidator2.errormessage = "*Please enter your email adress.";
Requiredfieldvalidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
Requiredfieldvalidator2.initialvalue = "";
var Regularexpressionvalidator1 = document.all ? document.all["Regularexpressionvalidator1"] : document.getElementById("Regularexpressionvalidator1");
Regularexpressionvalidator1.controltovalidate = "TextBox6";
Regularexpressionvalidator1.errormessage = "*Please enter a valid email adress.";
Regularexpressionvalidator1.display = "Dynamic";
Regularexpressionvalidator1.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
Regularexpressionvalidator1.validationexpression = "^([a-zA-Z0-9_\\-])([a-zA-Z0-9_\\-\\.]*)@(\\[((25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\\.){3}|((([a-zA-Z0-9\\-]+)\\.)+))([a-zA-Z]{2,}|(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\\])$";
var Requiredfieldvalidator5 = document.all ? document.all["Requiredfieldvalidator5"] : document.getElementById("Requiredfieldvalidator5");
Requiredfieldvalidator5.controltovalidate = "TextBox8";
Requiredfieldvalidator5.errormessage = "*Please enter your Phone.";
Requiredfieldvalidator5.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
Requiredfieldvalidator5.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();
(function(id) {
    var e = document.getElementById(id);
    if (e) {
        e.dispose = function() {
            Array.remove(Page_ValidationSummaries, document.getElementById(id));
        }
        e = null;
    }
})('ValidationSummary1');

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        
document.getElementById('RequiredFieldValidator4').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator4'));
}

document.getElementById('RegularExpressionValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RegularExpressionValidator2'));
}

document.getElementById('Requiredfieldvalidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('Requiredfieldvalidator1'));
}

document.getElementById('Requiredfieldvalidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('Requiredfieldvalidator3'));
}

document.getElementById('valRegular').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('valRegular'));
}

document.getElementById('Requiredfieldvalidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('Requiredfieldvalidator2'));
}

document.getElementById('Regularexpressionvalidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('Regularexpressionvalidator1'));
}

document.getElementById('Requiredfieldvalidator5').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('Requiredfieldvalidator5'));
}
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.CalendarBehavior, {"cssClass":"calendar","id":"CalendarExtender1"}, null, null, $get("TextBox5"));
});
//]]>
</script>
</form>