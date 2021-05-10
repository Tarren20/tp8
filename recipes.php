<?

// responsiv php code for tp8

$recipes = array();

$recipes["SlowCookSalsaChicken"] = array();
$recipes["SlowCookSalsaChicken"]["ingredients"] = array();
$recipes["SlowCookSalsaChicken"]["equipment"] = array();
$recipes["SlowCookSalsaChicken"]["directions"] = array();

$recipes["Righteous"] = array();
$recipes["Righteous"]["ingrediets"] = array();
$recipes["Righteous"]["equipment"] = array();
$recipes["Righteous"]["directions"] = array();

$recipes["Breaded"] = array();
$recipes["Breaded"]["ingredients"] = array();
$recipes["Breaded"]["equipment"] = array();
$recipes["Breaded"]["directions"] = array();

$recipes["SlowCookSalsaChicken"]["ingredients"][0] = "4 boneless skinless chicken breast (6 ounce each)";
$recipes["SlowCookSalsaChicken"]["ingredients"][1] = "1 Jar of salsa (16 ounce)";
$recipes["SlowCookSalsaChicken"]["ingredients"][2] = "1 3/4 cups frozen corn, thawed";
$recipes["SlowCookSalsaChicken"]["ingredients"][3] = "1 can";
$recipes["SlowCookSalsaChicken"]["ingredients"][4] = "pinto beans, rinsed and drained (15 ounce)";
$recipes["SlowCookSalsaChicken"]["ingredients"][5] = "1 can";
$recipes["SlowCookSalsaChicken"]["ingredients"][6] = "no salt added black beans, rinsed and drained (15 ounce)";
$recipes["SlowCookSalsaChicken"]["ingredients"][7] = "1 can";
$recipes["SlowCookSalsaChicken"]["ingredients"][8] = "diced tomatoes and green chiles, undrained (10 ounce)";
$recipes["SlowCookSalsaChicken"]["ingredients"][9] = "1 teaspoon sugar";
$recipes["SlowCookSalsaChicken"]["ingredients"][10] = "1/2 teaspoon salt";
$recipes["SlowCookSalsaChicken"]["ingredients"][11] = "1/4 teaspoon pepper";

$recipes["Righteous"]["ingredients"][0] = "2 cups superfine sugar";
$recipes["Righteous"]["ingredients"][1] = "1 cup butter, softened";
$recipes["Righteous"]["ingredients"][2] = "1 cup self-rising flour";
$recipes["Righteous"]["ingredients"][3] = "1 cup chocolate chunks";
$recipes["Righteous"]["ingredients"][4] = "¾ cup cocoa powder";
$recipes["Righteous"]["ingredients"][5] = "1 cup fresh raspberries";
$recipes["Righteous"]["ingredients"][6] = "1 teaspoon cocoa powder for dusting or as needed";

$recipes["Breaded"]["ingredients"][0] = "1 (16 ounce) package extra-firm tofu, drained and pressed";
$recipes["Breaded"]["ingredients"][1] = "2 cups vegetable broth";
$recipes["Breaded"]["ingredients"][2] = "3 tablespoons vegetable oil";
$recipes["Breaded"]["ingredients"][3] = "½ cup all-purpose flour";
$recipes["Breaded"]["ingredients"][4] = "3 tablespoons nutritional yeast";
$recipes["Breaded"]["ingredients"][5] = "1 teaspoon salt";
$recipes["Breaded"]["ingredients"][6] = "½ teaspoon freshly ground black pepper";
$recipes["Breaded"]["ingredients"][7] = "1 teaspoon sage";
$recipes["Breaded"]["ingredients"][8] = "½ teaspoon cayenne pepper";


$recipes["SlowCookSalsaChicken"]["equipment"][0] ="Slow Cooker";
$recipes["SlowCookSalsaChicken"]["equipment"][1] ="Rice Cooker";
$recipes["SlowCookSalsaChicken"]["equipment"][2] ="Knife";
$recipes["SlowCookSalsaChicken"]["equipment"][3] ="Can opener";
$recipes["SlowCookSalsaChicken"]["equipment"][4] ="Cutting board";
$recipes["SlowCookSalsaChicken"]["equipment"][5] ="Measuring Cups";

$recipes["Righteous"]["equipment"][0] = "Oven";
$recipes["Righteous"]["equipment"][1] = '12" x 9" pan';
$recipes["Righteous"]["equipment"][2] = "Measuring cups";
$recipes["Righteous"]["equipment"][3] = "Measuring spoons";
$recipes["Righteous"]["equipment"][4] = "Electric hand mixer or stand mixer";
$recipes["Righteous"]["equipment"][5] = "Large mixing bowl";

$recipes["Breaded"]["equipment"][0] = "Stove";
$recipes["Breaded"]["equipment"][1] = "Large skillet";
$recipes["Breaded"]["equipment"][2] = "Bowls";
$recipes["Breaded"]["equipment"][3] = "Measuring cups";
$recipes["Breaded"]["equipment"][4] = "Knife";

$recipes["SlowCookSalsaChicken"]["directions"][0] ="Place chicken in a 4- or 5-qt. slow cooker. Top with salsa, corn, beans, diced";

$recipes["Righteous"]["directions"][0] = "Preheat oven to 350 degrees F (175 degrees C).";
$recipes["Righteous"]["directions"][1] = "Grease a 12x9-inch baking dish and dust with 1 teaspoon cocoa powder.";
$recipes["Righteous"]["directions"][2] = "Beat eggs, superfine sugar, butter, flour, chocolate chunks, and 3/4 cups cocoa powder together with an electric hand mixer in a large mixing bowl until smooth.";
$recipes["Righteous"]["directions"][3] = "Fold raspberries gently into the batter; spoon into the prepared baking dish.";
$recipes["Righteous"]["directions"][4] = "Bake in the preheated oven until a toothpick inserted into the center comes out clean and the top is a bit crusty, 40 to 45 minutes.";
$recipes["Righteous"]["directions"][5] = "Let cool completely before cutting.";

$recipes["Breaded"]["directions"][0] = "Cut pressed tofu into 1/2-inch thick slices; then cut again into 1/2-inch wide sticks.
      Place tofu in a bowl, and pour broth over the top. Set aside to soak.";
$recipes["Breaded"]["directions"][1] = "In a separate bowl, stir together flour, yeast, salt, pepper, sage, and cayenne.</li>
    <li>Warm oil in a large skillet over medium-high heat.";
$recipes["Breaded"]["directions"][2] = "Remove tofu sticks from broth, and squeeze most <span>(but not all)</span> of the liquid from them.
      Roll sticks in breading. <span>(You may have to roll sticks twice to end up with a fairly dry outer layer of breading.)</span>
      Place tofu in hot oil; fry until crisp and browned on all sides. Add more oil if necessary.";

$requestedID = $_REQUEST["id"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_REQUEST["list"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

$requestedArray = $recipes[$requestedID][$requestedList];

$requestedJSON ="0";

if ($requestedArray != null) {
  $requestedJSON = json_encode($requestedArray);
}

echo $requestedJSON;



?>
