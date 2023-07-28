<x-layout-admin>
    <div class="container">
        <h2>Contact Us</h2>
        <p>Let us know how satisfied you are with our products</p>
        <form action="">
            @csrf
            <label for="fname">Username</label>
            <input type="text" id="name" name="name" placeholder="Username">

            <label for="lname">Email</label>
            <input type="text" id="email" name="email" placeholder="Email address">

            <label for="country">Phone number</label>
            <input type="text" id="phone" name="phone" placeholder="Phone number">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Address">

            <label for="comment">Comment</label>
            <input type="text" id="cmt" name="cmt" placeholder="Enter your complaint">

            <input type="submit" value="Send">
        </form>
    </div>
    <x-slot name="css">
        <link rel="stylesheet" href="/css/contact.css" />
    </x-slot>
</x-layout-admin>
