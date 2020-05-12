const synth = window.speechSynthesis;

//dom elements
const inputForm = document.getElementById('speechForm');
const inputTxt = document.getElementById('text-input');
const voiceSelect = document.querySelector('#voice-select');
//const voiceSelect = "Google UK English Male"
const rateValue = 1;
const pitchValue = 1;

const getVoices = () => {
	voices = synth.getVoices();

	voices.forEach(voice => {
		const option = document.createElement('option');

		option.textContent = voice.name + '(' + voice.lang + ')';

		option.setAttribute('data-lang', voice.lang);
		option.setAttribute('data-name', voice.name);
		voiceSelect.appendChild(option);
	});	
};

getVoices();
if(synth.onvoiceschanged !== undefined){
	synth.onvoiceschanged = getVoices;
}
//speak
const speak = () => {
	//check if already speaking
	if(synth.speaking){
		console.error('already speaking');
		return;
	}
	if(inputTxt.value !== ''){
		//get speak text
		var utterThis = new SpeechSynthesisUtterance(inputTxt.value);
		//speak end
		utterThis.onend = e => {
			console.log('done speaking');
		}
		//speak error
		utterThis.onerror = e => {
			console.error('something went wrong');
		}

		// selected voice
		const selectedVoice = voiceSelect.selectedOptions[0].getAttribute('data-name');
		//const selectedVoice = voiceSelect

		//loop through voices
		voices.forEach(voice => {
			if(voice.name === selectedVoice){
			utterThis.voice = voice;
			}
		});

		//set pitch and rate
		utterThis.pitch = pitchValue;
		utterThis.rate = rateValue;

		//speak
		synth.cancel();
		synth.speak(utterThis);
	}
};

//event listeners

//text form submit
inputForm.addEventListener('submit', e => {
	e.preventDefault();
	speak();
	inputTxt.blur();
});






// inputForm.onsubmit = function(event){
// 	event.preventDefault();

// 	var utterThis = new SpeechSynthesisUtterance(inputTxt.value);
// 	utterThis.voice = voiceSelect;
// 	utterThis.pitch = pitchValue;
// 	utterThis.rate = rateValue;
// 	synth.speak(utterThis);
// }
