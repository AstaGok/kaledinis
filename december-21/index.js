
class Book {
    constructor(id, title, author, totalCopies) {
        this.id = id;
        this.title = title;
        this.author = author;
        this.totalCopies = totalCopies;
        this.availableCopies = totalCopies;
    }

    isAvailable() {
        return this.availableCopies > 0;
    }
}

class Reader {
    constructor(id, name, borrowLimit) {
        this.id = id;
        this.name = name;
        this.borrowLimit = borrowLimit;
        this.borrowedBookIds = [];
    }

    canBorrow() {
        return this.borrowedBookIds.length < this.borrowLimit;
    }
}

class Loan {
    constructor(id, bookId, readerId, loanDate) {
        this.id = id;
        this.bookId = bookId;
        this.readerId = readerId;
        this.loanDate = loanDate;
        this.returnDate = null;
        this.status = "ACTIVE";
    }
}

class Library {
    constructor() {
        this.books = [];
        this.readers = [];
        this.loans = [];
    }

    addBook(book) { this.books.push(book); }
    registerReader(reader) { this.readers.push(reader); }

    borrowBook(readerId, bookId, date) {
        const reader = this.readers.find(r => r.id === readerId);
        const book = this.books.find(b => b.id === bookId);

        if (!book || !reader) return console.log("KLAIDA: Nerastas knyga arba skaitytojas");
        
        if (!book.isAvailable()) {
            console.log(`BORROW FAILED: ${reader.name} cannot borrow "${book.title}" (no copies available)`);
            return;
        }

        if (!reader.canBorrow()) {
            console.log(`BORROW FAILED: ${reader.name} reached limit`);
            return;
        }

        book.availableCopies--;
        reader.borrowedBookIds.push(bookId);
        const newLoan = new Loan(this.loans.length + 1, bookId, readerId, date);
        this.loans.push(newLoan);
        
        console.log(`BORROW OK: ${reader.name} borrowed "${book.title}"`);
        return newLoan;
    }

    returnBook(loanId, date) {
        const loan = this.loans.find(l => l.id === loanId && l.status === "ACTIVE");
        if (!loan) return;

        const book = this.books.find(b => b.id === loan.bookId);
        const reader = this.readers.find(r => r.id === loan.readerId);

        book.availableCopies++;
        const index = reader.borrowedBookIds.indexOf(book.id);
        reader.borrowedBookIds.splice(index, 1);

        loan.returnDate = date;
        loan.status = "RETURNED";
        console.log(`RETURN OK: "${book.title}" returned by ${reader.name}`);
    }

    printChristmasReport() {
        console.log("\n--- CHRISTMAS LIBRARY REPORT ---");
        this.books.forEach(b => {
            console.log(`${b.title}: ${b.availableCopies} / ${b.totalCopies} available`);
        });

        console.log("\nACTIVE LOANS");
        this.loans.filter(l => l.status === "ACTIVE").forEach(l => {
            const reader = this.readers.find(r => r.id === l.readerId);
            const book = this.books.find(b => b.id === l.bookId);
            console.log(`${reader.name} -> ${book.title}`);
        });
    }
}

const myLibrary = new Library();

myLibrary.addBook(new Book(1, "Clean Code", "Robert Martin", 2));
myLibrary.addBook(new Book(2, "The Pragmatic Programmer", "Andy Hunt", 1));
myLibrary.addBook(new Book(3, "Refactoring", "Martin Fowler", 1));

myLibrary.registerReader(new Reader(101, "Alice", 2));
myLibrary.registerReader(new Reader(102, "Bob", 1));

const loan1 = myLibrary.borrowBook(101, 1, "2023-12-20");
myLibrary.borrowBook(101, 1, "2023-12-21");
myLibrary.borrowBook(102, 1, "2023-12-22");

myLibrary.returnBook(loan1.id, "2023-12-23");

myLibrary.printChristmasReport();