var result = [];
console.log('asd')
$('.book-item').each((i, el) => {
	var book = {};
	book.groups = JSON.parse(el.getAttribute('data-groups'));
	book.title = $(el).find('.book-item_title')[0].innerText;
	var authorYear = $(el).find('.author')[0].innerText.split('•');
	book.author = authorYear[0].substr(3).trim();
	book.year = parseInt(authorYear[1].trim());
	result.push(book);
});

//[{"groups":["classic"],"title":"Of Mice and Men","author":"John Steinbeck","year":1937},{"groups":["classic","young"],"title":"The Catcher in the Rye","author":"J.D. Salinger","year":1951},{"groups":["classic","sci-fi"],"title":"1984","author":"George Orwell","year":1949},{"groups":["classic","young"],"title":"Lord of the Flies","author":"William Golding","year":1954},{"groups":["classic"],"title":"The Great Gatsby","author":"F. Scott Fitzgerald","year":1925},{"groups":["classic"],"title":"Moby Dick","author":"Herman Melville","year":1851},{"groups":["classic","sci-fi"],"title":"A Clockwork Orange","author":"Anthony Burgess","year":1962},{"groups":["classic","fairy"],"title":"The Princess and the Pea","author":"Hans Christian Andersen","year":1835},{"groups":["classic","fairy"],"title":"The Wonderful Wizard of Oz","author":"L. Frank Baum","year":1900},{"groups":["classic","fairy"],"title":"Mary Poppins","author":"P.L. Travers","year":1934},{"groups":["classic","fairy"],"title":"Beauty and the Beast","author":"Gabrielle-Suzanne Barbot de Villeneuve","year":1740},{"groups":["classic","fairy"],"title":"Rapunzel","author":"Friedrich Schulz","year":1812},{"groups":["fantasy","young"],"title":"Harry Potter and the Sorcerer's Stone","author":"J.K. Rowling","year":1997},{"groups":["fantasy","young"],"title":"Harry Potter and the Chamber of Secrets","author":"J.K. Rowling","year":1998},{"groups":["fantasy","young"],"title":"Harry Potter and the Prisoner of Azkaban","author":"J.K. Rowling","year":1999},{"groups":["fantasy","young"],"title":"Harry Potter and the Goblet of Fire","author":"J.K. Rowling","year":2000},{"groups":["fantasy","young"],"title":"Harry Potter and the Order of the Phoenix","author":"J.K. Rowling","year":2003},{"groups":["fantasy","young"],"title":"Harry Potter and the Half-Blood Prince","author":"J.K. Rowling","year":2005},{"groups":["fantasy","young"],"title":"Harry Potter and the Deathly Hallows","author":"J.K. Rowling","year":2007}]