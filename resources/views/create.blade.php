
      <h1>Create a new Pizza</h1>
           <form action="{{ route('store') }}" method="POST">
    @csrf
    <label for="name">your Name:</label>
    <input type="text" id="name" name="name">

    <label for="type">Choose pizza Type:</label>
    <select id="type" name="type">
        <option value="margarita">margarita</option>
        <option value="hawaiian">Hawaiian</option>
        <option value="veg supreme">veg supreme</option>
        <option value="volcano">volcano </option>
    </select>
    <label for="base">Base:</label>
    <select id="base" name="base">
        <option value="chessy crust">chessy crust</option>
        <option value="garlic crust">Garlic crust</option>
        <option value="thin & cripsy">Thin & cripsy</option>
        <option value="thick">Thick</option>
    </select>
    <button type="submit">Submit</button>
</form>


          