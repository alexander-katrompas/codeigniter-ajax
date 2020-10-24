        <div class="form-container">
            <div id="msg">
                <!-- This is a blank area for us to talk to the use -->
                <br>
            </div>
            <div id="form-div">
                <!-- notice the form attributes, you do NOT need method or action -->
                <form id="names-form" name="names-form">
                    <div class="input-div">
                        <input type="text" class="form-input" id="first-name" name="fname" placeholder="First Name" maxlength="64" value="">
                    </div>
                    <div class="input-div">
                        <input type="text" class="form-input" id="last-name" name="lname" placeholder="Last Name" maxlength="64" value="">
                    </div>
                </form>
            </div>
            <div>
                <!-- These are not HTML submit and clear buttons. They are generic buttons to which
                we will attach handlers to make them work as submit and clear buttons.
                Notice they are outside the form. -->
                <button id="names-send" type="button" class="">Send</button>&nbsp;&nbsp;
                <button id="names-clear" type="button" class="">Clear</button>
            </div>
        </div>
