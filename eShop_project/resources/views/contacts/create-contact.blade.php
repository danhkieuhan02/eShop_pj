<x-layout-admin>
    <div class="container">
        <h2>Contact Us</h2>
        <p style="text-align: center"><i>Let we know how satisfied you are with our products</i></p>
        @include('include.errors')
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <label for="lname">Username</label>
                    <input type="text" id="name" name="name" placeholder="Username" required>

                    <label for="lname">Email</label>
                    <input type="text" id="email" name="email" placeholder="Email address" required>

                    <label for="comment">Message</label>
                    <input type="text" id="message" name="message" placeholder="Enter your complaint" required>
                    <div class="text-center">
                        <input type="submit" class="btn btn-outline-success" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-slot name="css">
        <link rel="stylesheet" href="/css/contact.css" />
    </x-slot>
</x-layout-admin>
