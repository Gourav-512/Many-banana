from textblob import TextBlob

def chatbot_response(user_input):
    response = TextBlob(user_input)
    return response.correct()

# Test
if __name__ == "__main__":
    print(chatbot_response("I want tooo talkk to the AI!"))
