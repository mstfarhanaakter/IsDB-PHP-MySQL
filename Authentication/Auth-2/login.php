<style>
    
    div{
        display:flex;
        align-items:center;
        justify-content:center;
    }

    form{
        border:2px solid #6864F7;
        padding:15px;
        align-items: center;
        display: flex;
        flex-direction: column;
        /* border-radius: 10px 0 20px 5px; */
         border-radius: 50px 5px 50px 5px;

    }
    input{
        padding:15px;
        width: 100%;
        border:1px solid #6864F7;
    }
    button{
        display:flex;
        align-items:center;
        justify-content:center;
        border:none;
        background-color:#C99BF7;
        padding:10px;
        font-size:18px;
        border-radius:12px;
        width:45%;
        letter-spacing:2px;
        font-weight:bold;
        font-family:courier;
        cursor: pointer;
        

    }
    button:hover{
        background-color:#6864F7;
        color:white;
    }
    p{
        font-family:MV boli;
        color:#052A75;
        
    }
    .p{
        font-family: Lucida Handwriting;
    }
</style>
<body>
    <div>
        <form action="">
            <img src="spiderweb.gif" alt="" width="100px">
            <p>Welcome back! Please log in.</p>
            <input type="text" placeholder="Your Username">
            <br>
            <br>
            <input type="password" placeholder="Your Password">
            <br>
            <br>
            <!-- <input type="text" placeholder="Your Email (Optional)">
            <br>
            <br> -->
            <p class="p">Need a new password? <a href="">Click here.</a></p>
            <button>SUBMIT</button>
        </form>
    </div>
</body>