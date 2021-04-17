import zlib
import base64

j = zlib.decompress(base64.urlsafe_b64decode(b"eJyrVkpLzMyJT84rUbIy0wFyyvKLMktS0_PLUovyEvOSU5WslLITszOLS_KTixKTK5UQakpSE3OBsvk5lbkFmYnJ-cVKtQBeAhyg"))

print(j)
