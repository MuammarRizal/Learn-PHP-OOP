const BilanganGenapGanjil = () => {
  let bilanganGenap = [];
  let bilanganGanjil = [];

  const TesCode = (n) => {
    for (let i = 1; i <= n; i++)
      i % 2 === 0
        ? (bilanganGenap = [...bilanganGenap, i])
        : (bilanganGanjil = [...bilanganGanjil, i]);
  };
  TesCode(100);
  console.log(bilanganGenap);
  console.log(bilanganGanjil);
};

class BilanganPrima {
  bilanganPrima = [];
  isPrima(n) {
    for (let i = 2; i < n; i++) {
      if (n % i === 0) {
        return false;
      }
    }
    return true;
  }

  prima(n) {
    for (let i = 2; i < n; i++) {
      if (this.isPrima(i)) {
        this.bilanganPrima.push(i);
      }
    }
  }
}

const bilanganPrima = new BilanganPrima();
bilanganPrima.prima(100);
// console.log(bilanganPrima.bilanganPrima);

const Fibonacci = () => {
  let bilangan_fibonacci = [];
  let n1 = 0;
  let n2 = 1;

  for (let i = 0; i < 10; i++) {
    if (i === 0 || i === 1) {
      bilangan_fibonacci.push(i);
    } else {
      let total = n1 + n2;
      bilangan_fibonacci.push(total);
      n1 = n2;
      n2 = total;
    }
  }
  console.log({ Fibonacci: bilangan_fibonacci });
};

// Fibonacci();

// PALINDROME menggunakan temporary / variable
function Palindrome(word) {
  let text = "";

  for (let i = word.length; i > 0; i--) {
    text += word[i - 1];
  }

  return text === word ? true : false;
}
// console.log(Palindrome("kodok")); // true
// console.log(Palindrome("rizal")); // false

// PALINDROME tanpa variable
function PalindromeTnpVar(word) {
  for (let i = 0; i < word.length; i++) {
    let indexAwal = i;
    let indexAkhir = word.length - i - 1;

    if (word[indexAwal] !== word[indexAkhir]) {
      return false;
    }
  }
  return true;
}

console.log(PalindromeTnpVar("mom"));
