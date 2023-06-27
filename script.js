const fetchSearch = async (place) => {
    placeName.innerHTML = place
	const url = 'https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=' + place;
	const Haridwar = {
		method: 'GET',
		headers: {
			'X-RapidAPI-Key': '7fe45ef1b6msh0182aa7909734e5p1b517ajsn4a9cd4a0eaa6',
			'X-RapidAPI-Host': 'weather-by-api-ninjas.p.rapidapi.com'
		}
	};

	try {
		const response = await fetch(url, Haridwar);
		const result = await response.json();
		console.log(result);
		temp.innerHTML = result.temp
		feels_like.innerHTML = result.feels_like
		humidity.innerHTML = result.humidity
		max_temp.innerHTML = result.max_temp
		min_temp.innerHTML = result.min_temp
		wind_speed.innerHTML = result.wind_speed
	} catch (error) {
		console.error(error);
	}
}
submit.addEventListener("click", (e) => {
    e.preventDefault()
    fetchSearch(place.value)
})
fetchSearch('Dehradun')

