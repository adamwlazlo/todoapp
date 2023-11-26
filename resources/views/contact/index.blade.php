<h1>Contact us</h1>

<form action="">
    <div>
        <label for="name">Imię:</label><br>
        <input type="text" placeholder="Enter name" name="name" id="name" /><br />
        <label for="email">Email:</label><br>
        <input type="text" placeholder="Enter email" name="email" id="email" /><br />
        <label for="message">Wiadomość:</label><br>
        <textarea cols="50" rows="7" name="message" id="message">Enter message</textarea><br />
        <input type="submit">
    </div>
</form>

<a href="{{route("home.index")}}">Back</a>
