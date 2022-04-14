<x-header  message="Login"/>

        <div id="content">
            <h1>Login Page</h1>
            <div class="line"></div>
            
            <div class="formsec">
               <div id="message"> {{session('status')}}</div>
                <form action="login" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Enter username"><br>
                    <input type="password" name="pwd" placeholder="Enter Password"><br>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>

