
      <h1>Create a new Pizza</h1>
           <form action="{{ route('store') }}" method="POST">
    @csrf
    <label for="name">your Name:</label>
    <input type="text" id="name" name="name">

    <label for="type">Type:</label><br>
    <select id="type" name="type">
        <option value="meat">Meat</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
    </select><br>
    <label for="base">Base:</label><br>
    <select id="base" name="base">
        <option value="thin">Thin</option>
        <option value="thick">Thick</option>
    </select><br><br>
    <button type="submit">Submit</button>
</form>


          