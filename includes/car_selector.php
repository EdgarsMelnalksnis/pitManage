
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Car by Brand and Year</title>
    <script>
        const popularBrands = [
            "Alfa Romeo", "Audi", "BMW", "Chevrolet", "Chrysler", "Citroen", "Cupra", "Dacia",
            "Dodge", "Fiat", "Ford", "Honda", "Hyundai", "Infiniti", "Jaguar", "Jeep", "Kia",
            "Lancia", "Land Rover", "Lexus", "Mazda", "Mercedes", "Mini", "Mitsubishi", "Nissan",
            "Opel", "Peugeot", "Porsche", "Renault", "Saab", "Seat", "Skoda", "Smart", "Subaru",
            "Suzuki", "Tesla", "Toyota", "Volkswagen", "Volvo", "Gaz", "Moskvich", "Uaz", "Vaz"
        ];

        function loadPopularMakes() {
            const makeSelect = document.getElementById('make');
            makeSelect.innerHTML = '<option selected disabled>Select Brand</option>';
            popularBrands.sort().forEach(make => {
                let option = document.createElement('option');
                option.value = make;
                option.textContent = make;
                makeSelect.appendChild(option);
            });
        }

        function loadYears() {
            const yearSelect = document.getElementById('year');
            const currentYear = new Date().getFullYear();
            yearSelect.innerHTML = '<option selected disabled>Select Year</option>';
            for (let y = currentYear; y >= 1980; y--) {
                let option = document.createElement('option');
                option.value = y;
                option.textContent = y;
                yearSelect.appendChild(option);
            }
        }

        async function loadModels() {
            const make = document.getElementById('make').value;
            const year = document.getElementById('year').value;
            const modelSelect = document.getElementById('model');
            modelSelect.innerHTML = '<option selected disabled>Loading models...</option>';
            const response = await fetch(`https://vpic.nhtsa.dot.gov/api/vehicles/GetModelsForMakeYear/make/${make}/modelyear/${year}?format=json`);
            const data = await response.json();
            modelSelect.innerHTML = '<option selected disabled>Select Model</option>';
            data.Results.forEach(model => {
                let option = document.createElement('option');
                option.value = model.Model_Name;
                option.textContent = model.Model_Name;
                modelSelect.appendChild(option);
            });
        }

        async function showCarImage() {
            const make = document.getElementById('make').value;
            const year = document.getElementById('year').value;
            const model = document.getElementById('model').value;
            if (!make || !year || !model) return;

            const searchQuery = `${year} ${make} ${model}`;
            const response = await fetch(`https://api.duckduckgo.com/?q=${encodeURIComponent(searchQuery)}&format=json`);
            const data = await response.json();
            const img = document.getElementById('car-image');
            if (data.Image && data.Image.startsWith("http")) {
                img.src = data.Image;
                img.alt = searchQuery;
                img.style.display = 'block';
            } else {
                img.src = '';
                img.alt = 'No image found.';
                img.style.display = 'none';
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            loadPopularMakes();
            loadYears();
            document.getElementById('make').addEventListener('change', function () {
                const year = document.getElementById('year').value;
                if (year) loadModels();
            });
            document.getElementById('year').addEventListener('change', function () {
                const make = document.getElementById('make').value;
                if (make) loadModels();
            });
            document.getElementById('searchBtn').addEventListener('click', showCarImage);
        });
    </script>
    <style>
        body {
            font-family: sans-serif;
            padding: 2rem;
        }
        select, button {
            padding: 0.5rem;
            font-size: 1rem;
            margin-bottom: 1rem;
            width: 250px;
        }
        label {
            display: block;
            margin-top: 1rem;
        }
        img#car-image {
            margin-top: 2rem;
            max-width: 400px;
            height: auto;
            display: none;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <h2>Select Your Car</h2>

    <label for="make">Brand:</label>
    <select id="make"></select>

    <label for="year">Year:</label>
    <select id="year"></select>

    <label for="model">Model:</label>
    <select id="model"></select>

    <button id="searchBtn">Search</button>

    <img id="car-image" alt="Selected Car Preview">
</body>
</html>
