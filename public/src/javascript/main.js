class Main {
    constructor(name) {
        this.name = name;
    }

    greet() {
        return `Hello ${this.name}`
    }
}

console.log(new Main('Good').greet());