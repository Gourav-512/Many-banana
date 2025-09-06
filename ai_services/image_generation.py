from diffusers import StableDiffusionPipeline
import torch

def generate_image(prompt):
    model_id = "CompVis/stable-diffusion-v1-4"
    pipe = StableDiffusionPipeline.from_pretrained(model_id, torch_dtype=torch.float32)
    pipe = pipe.to("cpu")  # Use GPU if available: pipe.to("cuda")
    image = pipe(prompt).images[0]
    image.save("generated_image.png")
    return "generated_image.png"

# Test
if __name__ == "__main__":
    print(generate_image("A futuristic cityscape"))
