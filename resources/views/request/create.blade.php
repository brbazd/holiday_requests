<x-layout>
    <form action="{{route('request.store')}}" method="post">

        @csrf
        <div class="inputs">
        <label for="first_name">FirstName</label>
        <input type="text" name="first_name" id="first_name">
        </div>

        <div class="inputs">
        <label for="last_name">LastName</label>
        <input type="text" name="last_name" id="last_name">
        </div>

        <div class="inputs">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        </div>


        <div class="inputs">
        <label for="reason">Reason</label>
        <input type="text" name="reason" id="reason">
        </div>

        <div class="inputs">
            <button type="submit">Send Request</button>
        </div>

    </form>
</x-layout>
