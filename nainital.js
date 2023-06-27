
const fetchNainital = async () => {


const url = 'https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=nainital';
const Nainital = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '7fe45ef1b6msh0182aa7909734e5p1b517ajsn4a9cd4a0eaa6',
		'X-RapidAPI-Host': 'weather-by-api-ninjas.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, Nainital);
	const result =  await response.json();
	console.log(result);


        temp3.innerHTML = result.temp
        feels_like3.innerHTML = result.feels_like
        humidity3.innerHTML = result.humidity
        max_temp3.innerHTML = result.max_temp
        min_temp3.innerHTML = result.min_temp
        wind_speed3.innerHTML = result.wind_speed



} catch (error) {
	console.error(error);
}

}
fetchNainital()
