
// COOKIE RECIPE STARTS HERE

var cookie_serves_regular = 6;

var cookie_serves = 6;

 
var cookie_ingrs= ["Servings", "Granulated sugar","Packed brown sugar", "Butter or margarine, softened",
    "Vanilla","Egg","Gold Medal all-purpose flour","Baking soday","Salt","Coarsely chopped nuts",
    "Semisweet chocolate chips",
];

var cookie_units = ["", "cup", "cup", "cup","tsp", "","cup","tsp","tsp","cup","",
];

var cookie_amounts_regular = [6,3 / 4, 3 / 4,1,1,1,2 / 4,1,1 / 2,1,1 ];

var cookie_amounts = [6,3 / 4,3 / 4,1, 1,1,2 / 4,1,1 / 2,1,1 ];

function displayCookie() {
    $.each(cookie_ingrs, function (i, value) {
        $("#cookie").append("<p>" + cookie_amounts[i] + " " + cookie_units[i] + " " + value + "</p>");
    });
}

function doubleCookie() {
    $.each(cookie_amounts, function (i, value) {
        cookie_amounts[i] = value * 2;
    });
}

function halfCookie() {
    $.each(cookie_amounts, function (i, value) {
        cookie_amounts[i] = value / 2;
    });
}

function resetCookie() {
    $.each(cookie_amounts, function (i, value) {
        cookie_amounts[i] = cookie_amounts_regular[i];
    });
}

// COOKIE RECIPE ENDS HERE

// MUFFIN RECIPE STARTS HERE

var muffin_serves_regular = 30;
var muffin_serves = 30;

var muffin_ingrs = ["Pastry flour or King Arthur Unbleached all-purpose",
    "Sugar","Salt","Baking powder","Milk","Vegetable oil or melted butter",
    "Large egg","Vanilla extract","Sparkling white sugar",
];

var muffin_units = ["cups","cups","tsp","tbsp","cup","cup","","tsp"];

var muffin_amounts_regular = [30, 2, 1 / 2,1 / 2,1,1,1 / 4,2,1];

var muffin_amounts = [30,2,1 / 2,1 / 2, 1, 1, 1 / 4,2,1];

function displayMuffin() {
    $.each(muffin_ingrs, function (i, value) {
        $("#muffin").append("<p>" + muffin_amounts[i] + " " + muffin_units[i] + " " + value + "</p>");
    });
}

function doubleMuffin() {
    $.each(muffin_amounts, function (i, value) {
        muffin_amounts[i] = value * 2;
    });
}

function halfMuffin() {
    $.each(muffin_amounts, function (i, value) {
        muffin_amounts[i] = value / 2;
    });
}

function resetMuffin() {
    $.each(muffin_amounts, function (i, value) {
        muffin_amounts[i] = muffin_amounts_regular[i];
    });
}

// Cookie Recipe Ends Here

// Slow Cooker Chili Recipe Starts Here

var chili_serves_regular = 6;
var chili_serves = 6;

var chili_ingrs = [" ground beef","diced onion","diced celery","diced green bell pepper",
    "garlic, minced","tomato puree","kidney beans with liquid","kidney beans, drained",
    "sparkling white sugar","cannellini beans with liquid","chili powder","dried parsley",
    "salt","dried basil","dried oregano","ground black pepper","hot pepper sauce",

];

var chili_units = ["lb","cup","cup","cup","clove","can","can","can","can","tbsp",
    "tsp","tsp","tsp","tsp","tsp","tsp",
];

var chili_amounts_regular = [6,1,3 / 4,3 / 4,3 / 4,2,2,1,1,1,1 / 2,1 / 2,1,
    3 / 4,3 / 4,1 / 4,1 / 8 ];

var chili_amounts = [6,1,3 / 4,3 / 4,3 / 4,2,2,1,1,1,1 / 2,1 / 2,1,3 / 4,3 / 4,
    1 / 4,1 / 8 ];

function displayChili() {
    $.each(chili_ingrs, function (i, value) {
        $("#chili").append("<p>" + chili_amounts[i] + " " + chili_units[i] + " " + value + "</p>");
    });
}

function doubleChili() {
    $.each(chili_amounts, function (i, value) {
        chili_amounts[i] = value * 2;
    });
}

function halfChili() {
    $.each(chili_amounts, function (i, value) {
        chili_amounts[i] = value / 2;
    });
}

function resetChili() {
    $.each(chili_amounts, function (i, value) {
        chili_amounts[i] = chili_amounts_regular[i];
    });
}

// Slow Cooker Chili Recipe Ends Here