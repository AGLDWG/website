## Create a post from Markdown
### Windows
1. **create a Markdown file of the content of your post only**
    * must be named yyyy-mm-dd-This-is-the-title.md
    * must start with a level 2 header (## This is the title)
    
2. **use Pandoc to convert the \*.md file to HTML**
    * convert to an intermediate file with a non-recognised file extension like .hhhh: yyyy-mm-dd-This-is-the-title.hhhh
    * \> pandoc  yyyy-mm-dd-This-is-the-title.md -o yyyy-mm-dd-This-is-the-title.hhhh
    
3. **use CMD to concatenate the header and footer HTML files into an HTML file for the post**
    * \> copy _header.html+yyyy-mm-dd-This-is-the-title.hhhh+_footer.html yyyy-mm-dd-This-is-the-title.html 
    
4. **add a link to the post in the Posts index file (index.md)**
    * just copy the style used in previous entries
    
5. **regenerate the Posts index HTML file**
    * follow steps 1 - 3 but for index.md
    * make sure you overwrite the existing index.html
    
6. **delete all intermediate .hhhh files**

7. **commit all changes and push**
    * include the new post as the first text in the commit message
