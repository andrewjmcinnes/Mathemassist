


const container=document.querySelector(".app");

const myApp=[
				{
				type: "Lines of Symmetry",
				msg: "Pick the Shape With The Following Number of Lines of Symmetry",
				path: "http://localhost/mathemassist/assets/Game3/images/symmetry_lines",
				structure:[
							{question:"6", options:['6.jpg', '1.jpg', '4.jpg', '3.jpg'], key:0},

							{question:"1", options:['2.jpg', '0.jpg', '1.jpg', '3.jpg'], key:2},

							{question:"3", options:['1.jpg', '6.jpg', '3.jpg', '2.jpg'], key:2},

							{question:"0", options:['4.jpg', '1.jpg', '5.jpg', '0.jpg'], key:3},

							{question:"4", options:['0.jpg', '4.jpg', '2.jpg', '6.jpg'], key:1},

							{question:"2", options:['2.jpg', '5.jpg', '1.jpg', '4.jpg'], key:0},

							{question:"5", options:['6.jpg', '5.jpg', '0.jpg', '3.jpg'], key:1}
							]
				},

				{
				type: "Rotational Symmetry",
				msg: "Pick the Option With Rotational Symmetry of Order",
				path: "http://localhost/mathemassist/assets/Game3/images/rotational",
				structure:[
							{question:"5", options:['5.jpg', '1.jpg', '4.jpg', '8.jpg'], key:0},

							{question:"2", options:['1.jpg', '5.jpg', '2.jpg', '8.jpg'], key:2},

							{question:"8", options:['2.jpg', '4.jpg', '8.jpg', '5.jpg'], key:2},

							{question:"1", options:['8.jpg', '2.jpg', '4.jpg', '1.jpg'], key:3},

							{question:"4", options:['5.jpg', '4.jpg', '1.jpg', '2.jpg'], key:1}

							]
				}

				// {
				// type: "animal",
				// msg: "Pick the Appropriate Option",
				// path: "http://localhost/mathemassist/assets/Game3/images/animals",
				// structure:[
				// 			{question:"elephant", options:['goat.jpg', 'tiger.jpg', 'elephant.jpg', 'lion.jpg'], key:2},

				// 			{question:"horse", options:['horse.jpg', 'elephant.jpg', 'goat.jpg', 'tiger.jpg'], key:0},

				// 			{question:"goat", options:['lion.jpg', 'goat.jpg', 'tiger.jpg', 'horse.jpg'], key:1},

				// 			{question:"lion", options:['goat.jpg', 'lion.jpg', 'horse.jpg', 'tiger.jpg'], key:1},

				// 			{question:"tiger", options:['horse.jpg', 'elephant.jpg', 'lion.jpg', 'tiger.jpg'], key:3}
							
				// 			]
				// }
			]

//create select element
const select=document.createElement("select");
	select.setAttribute("onchange","load(this)")
for(let j=0; j<myApp.length; j++){
	const option=document.createElement("option");
		option.value=j;
		option.innerHTML=myApp[j].type;
		select.appendChild(option)
}
document.querySelector(".quiz-box").appendChild(select)

//create class
class App{
	constructor(myApp, container){
		this.app=myApp;
		this.container=container;
		this.index=0;
		this.score=0;
		this.quizSize=this.app.structure.length;
		this.optionSize=this.app.structure[0].options.length;
		this.msgEle=this.container.querySelector(".msg");
		this.quizEle=this.container.querySelector(".quiz");
		this.optionEle=this.container.querySelector(".option-box");
		this.questionNumber=this.container.querySelector(".question-number");
		this.scoreEle=this.container.querySelector(".score-board");
		this.setQuestion();
		this.setOptions();
		this.scoreBoard();
	}

	setQuestion(){
		this.msgEle.innerHTML=this.app.msg;
		this.quizEle.innerHTML=this.app.structure[this.index].question;
		this.questionNumber.innerHTML=(this.index+1)+"/"+this.quizSize;
	}

	setOptions(){
		this.optionEle.innerHTML="";
		for(let i=0; i<this.optionSize; i++){
			const button=document.createElement("button");
				button.type="button";
				button.id=i;
			const img=document.createElement("img");
				img.src=this.app.path+"/"+this.app.structure[this.index].options[i];
				button.appendChild(img);
			this.optionEle.appendChild(button)
		}
		this.optionClick();
	}


	scoreBoard(){
		this.scoreEle.innerHTML=this.score;

	}

	optionClick(){
		const that=this;
		const options=this.optionEle.children;
		for(let i=0; i<options.length; i++){
			options[i].addEventListener("click", function(){
				const span=document.createElement("span");
				if(this.id==that.app.structure[that.index].key){
					//console.log("correct"); 
					span.innerHTML="Correct";
					this.classList.add("correct");
					that.score++;
					that.scoreBoard();
				} else{
					//console.log("wrong");
					span.innerHTML="Wrong";
					this.classList.add("wrong");
				}
				this.appendChild(span);
				// hide elements that is not wrong or correct
				for(let j=0; j<that.optionEle.children.length; j++){

					if(this.id==that.optionEle.children[j].id){

					} 

					//show correct answer when user gets it wrong
					else if(that.optionEle.children[j].id==that.app.structure[that.index].key){
						var span2=document.createElement("span");
						span2.innerHTML="Correct";
						that.optionEle.children[j].appendChild(span2);
						that.optionEle.children[j].classList.add("correct");
					}
					else{
						that.optionEle.children[j].classList.add("hide");
					}
				}
				this.style.pointerEvents="none";			
				that.index++;

				if(that.index>that.quizSize-1){
					setTimeout(function(){
						that.quizOver();
					},2000);
					
				}else{
					//next quiz update
					setTimeout(function(){
						//that.index++;
						that.setQuestion();
						that.setOptions();
					},2000);
				}
			})	
		}
	}

	quizOver(){
		this.msgEle.innerHTML="";
		this.quizEle.innerHTML="";

		if(this.score > this.quizSize/2){
			this.optionEle.innerHTML="<h1><span>Quiz Over</span> <br> Well Done!</h1>"
		} else{
			this.optionEle.innerHTML="<h1><span>Quiz Over</span> <br> You Need More Practice</h1>"
		}
	}
}

//create object without onchange of select
const app1=new App(myApp[0], container)

function load(ele){
	
	const app1=new App(myApp[ele.value], container)
	console.log(ele.value)
}
