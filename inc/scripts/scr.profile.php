<main>

    <form name="profileForm" method="post" action="#">

        <div class = "profilePic">

            <img id="profilePic" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Profile Picture"/>

            
            <div id="profileImage" class="p-image avatar">
                <i class="fa fa-camera upload-button"></i>

            
                    <input id="imageUpload" class="file-upload" type="file" accept="image/*" onchange="previewFile()"/>
        

            </div>
        </div>

        </div>

        <ul class="userInformation">

            <li>

                <input id="username" type="text" readonly placeholder="Username"/>
                <div id="userpen" class="pen"><i id="usernamePen" class="fa fa-solid fa-pen"  onclick="changeUsername()"></i></div>

            </li>

            <li>

                <input id="oldPassword" type="password" readonly placeholder="Password"/>
                <div id="passpen" class="pen"><i id="passwordPen" class="fa fa-solid fa-pen" onclick="changePassword()"></i></div>
                
            </li>

            <li id = "newPassword">

                <input name = "newPassword" type="password" placeholder="New Password"/>
                <div id="hiddenPen" class="pen"><i class="fa fa-solid fa-pen"></i></div>
                
            </li>

        </ul>

        <div class = "profileButtons">

            <input type="submit"class="button" id ="bcancel" onclick="buttoncancel()" value="Cancel">
            <input type="submit"class="button" id ="bsave" value="Save">

        </div>


    </form> 

</main>