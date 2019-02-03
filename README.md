# Pixel-Farm

#Inspiration

Entertaining farmers is part of mission in improving farmer's livelihood. There are some entertainments that only farmers can do in this world, like...creating a huge picture which has an acre's area! This modern form of art, agricultural art, has become increasingly popular among some farmer communities in Japan and US. Here is a link to some beautiful scenery created by artists in Inakadate, Japan. link

#What it does

Our carefully designed website gives user several pattern to choose for their land. Users of our website can pick whatever picture he or she loves and provide the crop's colors that can be used in the actual picture. Users can also pick colors from the palette. Once the target picture is chosen and all crops are defined, users can get a demo of the possible resulting scenery and an instructions of where to plant each kind of crop. If users follow our instructions, he or she can be guaranteed to get the resulting pixel picture when the crops blossom.

#How we built it

    Implement an Interactive website to let farmers select the corps they want to plant and the photo that they want their lands to look like by utilizing php, javascript and css
    Reduce color dimensions in the photo from a lot to 3 and transfer the remaining colors to the ones selected by farmer by utilizing javascript
    Produce Cross-Stitch style of plantation plan. To be specific, assign where to plan what for farmers.

#Challenges we ran into

We first tried to wrote the transformation algorithm from given picture to pixels by our selves, but this algorithm needs to be optimized well for a good result. We also met obstacles when trying to make front-end webpage collaborate with back-end Matlab algorithms. We tackled this by solving the color converting problem using JavaScript instead of Matlab.

#Accomplishments that I'm proud of

In this project, farmer's dream of having a beautiful farm can be realized. We successfully turn any given picture with whatever resolution into a well-designed mosaic with choices of colors provided by farmers. The resulting pattern is depended strictly on the farmer's land size and avaiable crops. By having such a wonderful farm, the owner of the land also have opportunities to increase their income by exploring tourism market. Even other farmers in the community may have better connection with the picture's creator. We are proud that we found a new quantitative method to make American farmer's life more beautiful.

#What we learned

    We have learned how to change colors according to the color ranges in JavaScript.
    We have also learned how to build a website using php and hosting it in cPanel.

#What's next for pixel farm

Right now, the transformation algorithm is not able to find the rough sketch in the given picture. If the farmers would like to promote the tourism to increase the profits, there should be some paths for visitors in the farm. In order to find rough sketches in the given picture, we are thinking about using the neutral network to train the machine. The rough sketches will be the potential paths in the farm and farmers can decide whether or not they want to save them as paths. Since the pictures farmers upload for transformation might vary in sizes and scales, our web app is not able to resize for now. The next task will also focus on resizing a picture before transformation to the desired scale to keep consistent.

