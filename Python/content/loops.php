<?php
include "../include/template.php";
head("Pythoon - Section 5","Loops");
?>
    <h1>Loops</h1>
    <h2>“The for loop”</h2>

    <p>For loops are finite loops, i.e. they iterate over a given sequence. Here is an example:<p></p>
<div class="codesample">
    <code class="input"># declare one-dimensional list
    Numbers = [1, 2, 3, 4, 5]

    # iterate through the list
    For number in numbers:
    print(number) # print number</code>

    <code class="output">1, 2, 3, 4, 5</code>
</div>
    <h2>“range and xrange”</h2>
    <p>For loops can iterate over a sequence of numbers using the functions “range” or “xrange”. Both range and xrange are zero based function, i.e. they start from zero in case the range in specified by only a number. The difference between xrange and range is that xrange returns an iteration (Python 3 range function is based on xrange), which is more efficient, while range returns a new list with number of a specified range. Look at the example to understand better:</p>
<div class="codesample">
    <code class="input"># Prints out the numbers 0, 1, 2, 3
    print(“First for loop:”)
    for number in range(4):
    print(number)

    print(“Second for loop:”)

    # Prints out 2, 3, 4, 5
    for number in range(2, 6):
    print(number)

    print(“Third for loop:”)
    # Prints out 3, 5, 7
    for number in range(3, 8, 2):
    print(number)</code>

    <code class="output">0, 1, 2, 3</code>
</div>
    <h2>“The while loop”</h2>
    <p>While loops can be both finite and infinite loops. They repeat until a certain condition (such as a certain boolean condition) is met. Below you can find an example:</p>
<div class="codesample">
    <code class="input"># Prints out 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    counter = 0
    while counter < 10:
    print(counter)
    counter = counter + 1  # same as count += 1</code>

    <code class="output">0, 1, 2, 3, 4, 5, 6, 7, 8, 9</code>
</div>
    <h2>“break and continue”</h2>
    <p>The break statement is used to exit a for or while loop. A continue statement is instead used to skip the current sequence of code and return to the loop statement. For example:</p>
<div class="codesample">
    <code class="input"># Prints out 0, 1, 2, 3, 4, 5, 6
    counter = 0
    while True:
    print(counter)
    counter += 1
    if counter >= 6:
    break



    # Prints out only even numbers - 0, 2, 4, 6, 8, 10, 12, 14, 16, 18
    for num in range(20):

    # Check if x is odd
    if num % 2 != 0:
    continue
    print(num)</code>

    <code class="output">0, 1, 2, 3, 4, 5, 6, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18</code>
</div>
    <h2>“One-dimensional lists”</h2>
    <p>In the first example, the one about the for loop, we declared a one dimensional list to be iterated. But what is a list? A list is a collection of data, which is ordered and changeable and allows duplicates. In Python lists are written with square brackets.</p>
<div class="codesample">
    <code class="input">listState = [‘NY’, ‘CA’, ‘NC’, ‘FL’]
    print(listState)</code>

    <code class="output">[NY, CA, NC, FL]</code>
</div>
    <p>As you read above, lists are changeable. That means you can access the list at any index and change that value</p>
<div class="codesample">
    <code class="input">listState = [‘NY’, ‘CA’, ‘NC’, ‘FL’]
    print(listState)

    listState[1] = ‘SC’ # Note that the index of the list starts from 0. Therefore list
    [1] is referred to “CA” and not “NY”
    print(listState)</code>

    <code class="output">[NY, CA, NC, FL]
    [NY, SC, NC, FL]</code>
</div>

    <p>You can iterate through a list using the for loop you learned above. You can also check if a specific item is contained in the list.</p>

<div class="codesample">
    <code class="input">listState = ['CA', 'NY', 'SC', 'OH']

    for i in listState:
    print(i)

    if 'NY' in listState:
    print('CORRECT!')</code>

    <code class="output">CA
    NY
    SC
    OH
    CORRECT!</code>
</div>
<?php
foot();
