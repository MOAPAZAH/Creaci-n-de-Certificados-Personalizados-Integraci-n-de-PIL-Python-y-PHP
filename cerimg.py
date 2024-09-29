import sys
from PIL import Image, ImageDraw, ImageFont

# Obtener los argumentos de línea de comandos
nombre = sys.argv[1]
usuario = sys.argv[2]
contrasena = sys.argv[3]

# Cargar la imagen de fondo
img = Image.open('img/11.png')

# Crear un objeto para dibujar en la imagen
draw = ImageDraw.Draw(img)

# Cargar las fuentes
font_nombre = ImageFont.truetype("arial.ttf", 30)  # Fuente para el nombre
font_usuario = ImageFont.truetype("arial.ttf", 30)  # Fuente para el usuario
font_contrasena = ImageFont.truetype("arial.ttf", 25)  # Fuente para la contraseña

# Obtener el tamaño de la imagen
img_width, img_height = img.size

# Función para centrar el texto horizontalmente en la imagen
def centrar_texto(draw, texto, font, pos_y):
    # Obtener el tamaño del texto usando textbbox
    text_bbox = draw.textbbox((0, 0), texto, font=font)
    text_width = text_bbox[2] - text_bbox[0]
    # Calcular la posición X para centrar el texto
    pos_x = (img_width - text_width) / 2  # Asegúrate de que img_width esté definido
    return (pos_x, pos_y)

# Definir las posiciones del texto (solo la coordenada Y)
pos_y_nombre = 300     # Posición Y para el nombre
pos_y_usuario = 250    # Posición Y para el usuario
pos_contrasena = (900,60) # Posición X Y para la contraseña

# Definir los colores
color_negro = (0, 0, 0)    # Negro para el nombre
color_azul = (0, 0, 255)   # Azul para el usuario
color_rojo = (255, 0, 0)   # Rojo para la contraseña

# Añadir el nombre centrado
pos_nombre = centrar_texto(draw, nombre, font_nombre, pos_y_nombre)
draw.text(pos_nombre, nombre, font=font_nombre, fill=color_negro)

# Añadir el usuario centrado
pos_usuario = centrar_texto(draw, usuario, font_usuario, pos_y_usuario)
draw.text(pos_usuario, usuario, font=font_usuario, fill=color_azul)

# Añadir la contraseña centrada
#pos_contrasena = centrar_texto(draw, contrasena, font_contrasena, pos_y_contrasena)
draw.text(pos_contrasena, contrasena, font=font_contrasena, fill=color_rojo)

# Guardar la imagen con el texto añadido
img.save(f'certificado_imagen_{nombre}.png')

# Mostrar la imagen (opcional)
img.show()

