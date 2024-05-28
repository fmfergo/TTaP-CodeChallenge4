static void Main(string[] args)
        {
            Random random = new Random();
            int numberToGuess = random.Next(1, 101); // Generates a random number between 1 and 100
            int userGuess = 0;
            int attempts = 5;

            Console.WriteLine("Welcome to the Number Guessing Game!");
            Console.WriteLine("I have chosen a number between 1 and 100.");
            Console.WriteLine($"You have {attempts} attempts to guess the number.");

            while (attempts > 0)
            {
                Console.Write("Enter your guess: ");
                string input = Console.ReadLine();

                if (int.TryParse(input, out userGuess))
                {
                    if (userGuess == numberToGuess)
                    {
                        Console.WriteLine("Congratulations! You guessed the number correctly.");
                        break;
                    }
                    else if (userGuess < numberToGuess)
                    {
                        Console.WriteLine("Too low! Try again.");
                    }
                    else
                    {
                        Console.WriteLine("Too high! Try again.");
                    }

                    attempts--;
                    Console.WriteLine($"You have {attempts} attempts left.");
                }
                else
                {
                    Console.WriteLine("Invalid input. Please enter a valid number.");
                }
            }

            if (attempts == 0)
            {
                Console.WriteLine($"Sorry, you have used all your attempts. The correct number was {numberToGuess}.");
            }

            Console.WriteLine("Thank you for playing the Number Guessing Game!");
        }
    }
}