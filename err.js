class User{
	constructor (name,surname){
		this.name = name;
		this.surname = surname;
	}
	greetings(){
		console.log('hello mister ${this.name}');
	}
}

let andrey = new User("Andrey","Zaytsev");
andrey.greetings();