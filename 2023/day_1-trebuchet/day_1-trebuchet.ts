import fs from "fs";

const file = fs.readFileSync(__dirname + "/input.txt").toString();

const lines = file.trim().split("\n");

let sum = 0;

for (const line of lines) {
    let first_digit: string = "0";
    for (let i = 0; i < line.length; i++) {
        const c = line[i];
        if ("0" <= c && c <= "9") {
            first_digit = c;
            break;
        }
    }
    let last_digit: string = "0";
    for (let i = line.length - 1; i >= 0; i--) {
        const c = line[i];
        if ("0" <= c && c <= "9") {
            last_digit = c;
            break;
        }
    }
    const num = Number(first_digit + last_digit);

    sum += num;
}

console.log(sum);
