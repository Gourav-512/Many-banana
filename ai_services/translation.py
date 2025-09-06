from textblob import TextBlob

def translate_text(input_text, target_language):
    blob = TextBlob(input_text)
    translated_text = blob.translate(to=target_language)
    return str(translated_text)

# Test
if __name__ == "__main__":
    print(translate_text("Hello, how are you?", "fr"))
