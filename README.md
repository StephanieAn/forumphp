# The Hill - 05 - The forum

> PHP/MySQL Bulletin Board Project

| Challenge Parameters | Challenge Details                                                                                                                                                                          |
| :------------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Repository           | `The forum`                                                                                                                                                                                |
| Challenge type       | `consolidation challenge`                                                                                                                                                                  |
| Duration             | `2 weeks`                                                                                                                                                                                  |
| Deadline             | `20/09/2021 08h59`                                                                                                                                                                         |
| Deployment method    | `Heroku`                                                                                                                                                                                   |
| Group composition    | `4`                                                                                                                                                                                        |
| Project submission   | coming soon                                                                                                                                                                                |
| Developer            | [Engie-Paquot](https://github.com/Engie-Paquot) , [StepahnieAN](https://github.com/StephanieAn), [Thibaut3005](https://github.com/Thibaut3005) & [Tompouday](https://github.com/Tompouday) |

---

## About

In this project, we created a _bulletin board_, also called _forum_, using `PHP` & `MySQL`.  
We also used [SASS](https://sass-lang.com/install) & [Bootstrap](https://getbootstrap.com/) (**responsive**!).  
The tooling that we used is `docker`.

We also **had _to follow the given design_** located [here](./design).

### Features

We designed a database to handle four types of data:

- users
- boards
- topics
- messages

#### Users

- Users must be _connected_ to interact ; implementation of the creation of users (_sign up_) and the connection of users (_sign in_). Users will use an _unique_ `email` and a `password` for authorization.

- Users will also have a _nickname_ (must be unique), an _avatar_ (use of [Gravatar](//gravatar.com)) and a _signature_ (to show at the end of each users' messages).

- Users will be able to modify their information (except email) on a **profile page**.

- Once Gravatar has been set up, an User must be able to _upload an image_ to be used as his avatar (if an User doesn't have an avatar, you still use his gravatar).

#### Boards

- A Board is a logical group of Topics. We created four boards in our database: **General**, **Development**, **Smalltalk** and **Events**.

- Each Board has a _name_ and a _description_.

- When showing the list of the Boards, the last Topics are shown: the three one with the most recent Message.

#### Topics

- A Topic is a timeline of Messages.

- Every user can create a Topic in a Board.

- Each Topic has a _title_, a _creation date_, a _content_ (which is kinda the _first message_) and an _author_ (an User).

- The _author_ of a Topic can _lock_ it - a locked Topic can't receive new messages

#### Messages

- A Message is a contribution from an User to a Topic.

- Every User can add a Message to a Topic.

- Each Message has a _content_, a _create date_, an _author_ (an User), and an _edition date_.

- The _content_ is _rich_: it interprets **markdown**.

- A Message can be _edited_ by his author, and will show his _edition date_ in that case.

- A Message can be _deleted_ by his author, and will be shown as "deleted" in the Topic.

#### Tooling

- To handle our _local environment_, we used **docker** and **docker-compose**. Please refer to the [docker-readme.md](./docker-readme.md) file to know how to install and use docker.

> 🖐 **docker** is quite a complex tool.

Within these environment, you have an instance of **phpMyAdmin**, a _database manager_, to help you interact with your database while working on your project.

#### Organization & workflow

Communication is the key.

### Deployment & deadline

The project is _published_ on [Heroku](www.heroku.com).
