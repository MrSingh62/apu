<x-header  message="Register"/>

        <div id="content">
            <h1>Register Page</h1>
            <div class="line"></div>
            
            <div class="formsec">
               <div id="message"> {{session('status')}}</div>
               <div id="message"> {{session('status1')}}</div>
               @if($errors->any())
                @foreach($errors->all() as $b)
                <div style="color:red;background:#fff;margin-bottom:1rem;padding:0.5rem;display:inline-block">{{$b}}</div>
                @endforeach
                @endif
                <form action="register1" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Enter username"><br>
                    <input type="text" name="e1" placeholder="Enter Email"><br>
                    <input type="text" name="a1" placeholder="Enter age"><br>
                    <input type="password" name="pwd" placeholder="Enter Password"><br>
                    <input type="submit" name="submit" value="Register">
                </form>
            </div>
        </div>
 
