document.addEventListener("DOMContentLoaded", function() {
    const movieGrid = document.getElementById("movie-grid");

    // Datos de las películas
    const moviesData = [
        {
            title: "Interstellar",
            image: "http://web.mastertecnology.net/wp-content/uploads/2024/05/297acd129204217.616629e21fe76.png",
            year: 2014,
            synopsis: "Un grupo de exploradores espaciales viaja a través de un agujero de gusano en busca de un nuevo hogar para la humanidad.",
            actors: ["Matthew McConaughey", "Anne Hathaway", "Jessica Chastain"],
            reviews: [
                { author: "Usuario1", comment: "Una película impresionante, visualmente deslumbrante." },
                { author: "Usuario2", comment: "Una experiencia cinematográfica emocionante y profunda." }
            ]
        },
        {
            title: "The Dark Knight",
            image: "URL_DE_LA_IMAGEN",
            year: 2008,
            synopsis: "Batman se enfrenta al Joker, un criminal psicópata que siembra el caos en Gotham City.",
            actors: ["Christian Bale", "Heath Ledger", "Aaron Eckhart"],
            reviews: [
                { author: "FanBatman", comment: "Heath Ledger da la mejor interpretación del Joker." }
            ]
        }
        // Puedes agregar más películas aquí...
    ];

    // Función para renderizar películas en la cuadrícula
    function renderMovies() {
        moviesData.forEach(movie => {
            const movieElement = document.createElement("div");
            movieElement.classList.add("movie");

            const movieImage = document.createElement("img");
            movieImage.src = movie.image;
            movieImage.alt = movie.title;
            movieImage.style.width = "100px"; // Tamaño deseado para la imagen
            movieImage.style.height = "auto"; // Mantener proporción

            const movieTitle = document.createElement("h3");
            movieTitle.textContent = movie.title;

            movieElement.appendChild(movieImage);
            movieElement.appendChild(movieTitle);

            movieGrid.appendChild(movieElement);

            // Mostrar detalles de la película al hacer clic en la película
            movieElement.addEventListener("click", () => {
                displayMovieDetails(movie);
            });
        });
    }

    // Llamar a la función para renderizar las películas al cargar la página
    renderMovies();

    // Función para mostrar detalles de una película
    function displayMovieDetails(movie) {
        const movieTitle = document.getElementById("movie-title");
        const movieImage = document.getElementById("movie-image");
        const movieSynopsis = document.getElementById("movie-synopsis");
        const movieActors = document.getElementById("movie-actors");
        const movieReviews = document.getElementById("movie-reviews");

        movieTitle.textContent = movie.title;
        movieImage.src = movie.image;
        movieSynopsis.textContent = movie.synopsis;
        movieActors.textContent = "Actores: " + movie.actors.join(", ");
        movieReviews.innerHTML = ""; // Limpiar reseñas existentes

        movie.reviews.forEach(review => {
            const li = document.createElement("li");
            li.textContent = `${review.author}: ${review.comment}`;
            movieReviews.appendChild(li);
        });

        // Mostrar detalles de la película y ocultar la lista de películas
        const movieDetails = document.getElementById("movie-details");
        movieDetails.style.display = "block";
        movieGrid.style.display = "none";
    }

    // Botón para regresar a la lista de películas
    const backButton = document.getElementById("back-button");
    backButton.addEventListener("click", () => {
        const movieDetails = document.getElementById("movie-details");
        movieDetails.style.display = "none";
        movieGrid.style.display = "grid"; // Mostrar la lista de películas nuevamente
    });
});


