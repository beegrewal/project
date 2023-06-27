
const fetchharidwar = async () => {
	const url = 'https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=rishikesh';
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
		temp2.innerHTML = result.temp

		feels_like2.innerHTML = result.feels_like
		humidity2.innerHTML = result.humidity
		max_temp2.innerHTML = result.max_temp
		min_temp2.innerHTML = result.min_temp
		wind_speed2.innerHTML = result.wind_speed
	} catch (error) {
		console.error(error);
	}
}
fetchharidwar()


