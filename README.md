<div align="left" style="position: relative;">
<h1>MVC</h1>
<p align="left">
	<em><code>❯ Prototype of The MVC architecture using php and mysql</code></em>
</p>
<p align="left">
	<img src="https://img.shields.io/github/license/MostafaAllam-start/MVC?style=default&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/MostafaAllam-start/MVC?style=default&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/MostafaAllam-start/MVC?style=default&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/MostafaAllam-start/MVC?style=default&color=0080ff" alt="repo-language-count">
</p>
<p align="left"><!-- default option, no dependency badges. -->
</p>
<p align="left">
	<!-- default option, no dependency badges. -->
</p>
</div>
<br clear="right">

##  Table of Contents

- [ Overview](#-overview)
- [ Project Structure](#-project-structure)
  - [ Project Index](#-project-index)
- [ Getting Started](#-getting-started)
  - [ Prerequisites](#-prerequisites)
  - [ Installation](#-installation)
  - [ Usage](#-usage)
  - [ Testing](#-testing)

---

##  Overview

<code>❯ prototype of The MVC architecture using php and mysql</code>

---


##  Project Structure

```sh
└── MVC/
    ├── README.md
    ├── app
    │   ├── controllers
    │   │   ├── categoryController.php
    │   │   ├── dashboardController.php
    │   │   ├── homeController.php
    │   │   ├── postController.php
    │   │   ├── site_settingController.php
    │   │   └── userController.php
    │   ├── core
    │   │   ├── app.php
    │   │   ├── controller.php
    │   │   ├── db.php
    │   │   ├── dbHandler.php
    │   │   └── helper.php
    │   ├── models
    │   │   ├── categoryModel.php
    │   │   ├── postModel.php
    │   │   ├── roleModel.php
    │   │   ├── site_settingModel.php
    │   │   └── usermodel.php
    │   └── views
    │       ├── dashboard
    │       │   ├── category
    │       │   │   ├── add.php
    │       │   │   ├── index.php
    │       │   │   └── update.php
    │       │   ├── index.php
    │       │   ├── posts
    │       │   │   ├── add.php
    │       │   │   ├── index.php
    │       │   │   └── update.php
    │       │   ├── site_settings
    │       │   │   └── theam.php
    │       │   └── users
    │       │       ├── add.php
    │       │       ├── index.php
    │       │       ├── login.php
    │       │       └── update.php
    │       └── website
    │           ├── food
    │           │   └── index.php
    │           └── nike
    │               └── index.php
    ├── composer.json
    ├── composer.lock
    ├── index.php
    ├── public
    │   ├── dashboard
    │   │   ├── assets
    │   │   │   ├── dist
    │   │   │   │   ├── css
    │   │   │   │   ├── img
    │   │   │   │   └── js
    │   │   │   └── plugins
    │   │   │       ├── ...
    │   │   ├── images
    │   │   │   └── ...
    │   │   └── layout
    │   │       ├── footer.php
    │   │       └── head.php
    │   └── website
    │       ├── food
    │       │   ├── css
    │       │   │   ├── External
    │       │   │   ├── style.css
    │       │   │   └── webfonts
    │       │   ├── img
    │       │   │   ├── ....
    │       │   └── js
    │       │       └── min.js
    │       ├── nike
    │       │   ├── css
    │       │   │   ├── External
    │       │   │   ├── style.css
    │       │   │   └── webfonts
    │       │   ├── img
    │       │   │   ├── ...
    │       │   └── js
    │       │       └── min.js
    │       └── theams
    │           ├── food.jpg
    │           └── nike.jpg
    └── vendor
        ├── autoload.php
        ├── composer
        │   ├── ...
        ├── graham-campbell
        │   └── result-type
        │       ├── LICENSE
        │       ├── composer.json
        │       └── src
        │           ├── Error.php
        │           ├── Result.php
        │           └── Success.php
        ├── phpoption
        │   └── phpoption
        │       ├── LICENSE
        │       ├── composer.json
        │       └── src
        │           └── PhpOption
        ├── symfony
        │   ├── polyfill-ctype
        │   │   ├── Ctype.php
        │   │   ├── LICENSE
        │   │   ├── README.md
        │   │   ├── bootstrap.php
        │   │   ├── bootstrap80.php
        │   │   └── composer.json
        │   ├── polyfill-mbstring
        │   │   ├── LICENSE
        │   │   ├── Mbstring.php
        │   │   ├── README.md
        │   │   ├── Resources
        │   │   │   └── unidata
        │   │   ├── bootstrap.php
        │   │   ├── bootstrap80.php
        │   │   └── composer.json
        │   └── polyfill-php80
        │       ├── LICENSE
        │       ├── Php80.php
        │       ├── PhpToken.php
        │       ├── README.md
        │       ├── Resources
        │       │   └── stubs
        │       ├── bootstrap.php
        │       └── composer.json
        └── vlucas
            └── phpdotenv
                ├── LICENSE
                ├── composer.json
                └── src
                    ├── Dotenv.php
                    ├── Exception
                    ├── Loader
                    ├── Parser
                    ├── Repository
                    ├── Store
                    ├── Util
                    └── Validator.php
```


###  Project Index
<details open>
	<summary><b><code>MVC/</code></b></summary>
	<details> <!-- __root__ Submodule -->
		<summary><b>__root__</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/index.php'>index.php</a></b></td>
				<td></td>
			</tr>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/composer.json'>composer.json</a></b></td>
				<td></td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- vendor Submodule -->
		<summary><b>vendor</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/autoload.php'>autoload.php</a></b></td>
				<td></td>
			</tr>
			</table>
			<details>
				<summary><b>vlucas</b></summary>
				<blockquote>
					<details>
						<summary><b>phpdotenv</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/composer.json'>composer.json</a></b></td>
								<td></td>
							</tr>
							</table>
							<details>
								<summary><b>src</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Dotenv.php'>Dotenv.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Validator.php'>Validator.php</a></b></td>
										<td></td>
									</tr>
									</table>
									<details>
										<summary><b>Loader</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Loader/Loader.php'>Loader.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Loader/LoaderInterface.php'>LoaderInterface.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Loader/Resolver.php'>Resolver.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
									<details>
										<summary><b>Util</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Util/Str.php'>Str.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Util/Regex.php'>Regex.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
									<details>
										<summary><b>Parser</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/Parser.php'>Parser.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/Lexer.php'>Lexer.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/Lines.php'>Lines.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/Entry.php'>Entry.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/Value.php'>Value.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/ParserInterface.php'>ParserInterface.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Parser/EntryParser.php'>EntryParser.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
									<details>
										<summary><b>Repository</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php'>RepositoryBuilder.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/RepositoryInterface.php'>RepositoryInterface.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/AdapterRepository.php'>AdapterRepository.php</a></b></td>
												<td></td>
											</tr>
											</table>
											<details>
												<summary><b>Adapter</b></summary>
												<blockquote>
													<table>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php'>ImmutableWriter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php'>MultiReader.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php'>PutenvAdapter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php'>EnvConstAdapter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php'>AdapterInterface.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php'>ApacheAdapter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php'>ServerConstAdapter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php'>ReaderInterface.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php'>GuardedWriter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php'>ArrayAdapter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php'>WriterInterface.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php'>MultiWriter.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php'>ReplacingWriter.php</a></b></td>
														<td></td>
													</tr>
													</table>
												</blockquote>
											</details>
										</blockquote>
									</details>
									<details>
										<summary><b>Exception</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Exception/InvalidFileException.php'>InvalidFileException.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php'>InvalidEncodingException.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Exception/ValidationException.php'>ValidationException.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Exception/InvalidPathException.php'>InvalidPathException.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Exception/ExceptionInterface.php'>ExceptionInterface.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
									<details>
										<summary><b>Store</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Store/StoreBuilder.php'>StoreBuilder.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Store/FileStore.php'>FileStore.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Store/StoreInterface.php'>StoreInterface.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Store/StringStore.php'>StringStore.php</a></b></td>
												<td></td>
											</tr>
											</table>
											<details>
												<summary><b>File</b></summary>
												<blockquote>
													<table>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Store/File/Reader.php'>Reader.php</a></b></td>
														<td></td>
													</tr>
													<tr>
														<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/vlucas/phpdotenv/src/Store/File/Paths.php'>Paths.php</a></b></td>
														<td></td>
													</tr>
													</table>
												</blockquote>
											</details>
										</blockquote>
									</details>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>composer</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/autoload_namespaces.php'>autoload_namespaces.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/InstalledVersions.php'>InstalledVersions.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/installed.php'>installed.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/autoload_static.php'>autoload_static.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/autoload_files.php'>autoload_files.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/ClassLoader.php'>ClassLoader.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/autoload_psr4.php'>autoload_psr4.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/autoload_classmap.php'>autoload_classmap.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/autoload_real.php'>autoload_real.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/platform_check.php'>platform_check.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/composer/installed.json'>installed.json</a></b></td>
						<td></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>symfony</b></summary>
				<blockquote>
					<details>
						<summary><b>polyfill-mbstring</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/bootstrap80.php'>bootstrap80.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/Mbstring.php'>Mbstring.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/bootstrap.php'>bootstrap.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/composer.json'>composer.json</a></b></td>
								<td></td>
							</tr>
							</table>
							<details>
								<summary><b>Resources</b></summary>
								<blockquote>
									<details>
										<summary><b>unidata</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/titleCaseRegexp.php'>titleCaseRegexp.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/lowerCase.php'>lowerCase.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-mbstring/Resources/unidata/upperCase.php'>upperCase.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
								</blockquote>
							</details>
						</blockquote>
					</details>
					<details>
						<summary><b>polyfill-php80</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/bootstrap.php'>bootstrap.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/composer.json'>composer.json</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/PhpToken.php'>PhpToken.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/Php80.php'>Php80.php</a></b></td>
								<td></td>
							</tr>
							</table>
							<details>
								<summary><b>Resources</b></summary>
								<blockquote>
									<details>
										<summary><b>stubs</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/Stringable.php'>Stringable.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php'>UnhandledMatchError.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/ValueError.php'>ValueError.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/PhpToken.php'>PhpToken.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-php80/Resources/stubs/Attribute.php'>Attribute.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
								</blockquote>
							</details>
						</blockquote>
					</details>
					<details>
						<summary><b>polyfill-ctype</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-ctype/bootstrap80.php'>bootstrap80.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-ctype/bootstrap.php'>bootstrap.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-ctype/composer.json'>composer.json</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/symfony/polyfill-ctype/Ctype.php'>Ctype.php</a></b></td>
								<td></td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>graham-campbell</b></summary>
				<blockquote>
					<details>
						<summary><b>result-type</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/graham-campbell/result-type/composer.json'>composer.json</a></b></td>
								<td></td>
							</tr>
							</table>
							<details>
								<summary><b>src</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/graham-campbell/result-type/src/Result.php'>Result.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/graham-campbell/result-type/src/Success.php'>Success.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/graham-campbell/result-type/src/Error.php'>Error.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>phpoption</b></summary>
				<blockquote>
					<details>
						<summary><b>phpoption</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/phpoption/phpoption/composer.json'>composer.json</a></b></td>
								<td></td>
							</tr>
							</table>
							<details>
								<summary><b>src</b></summary>
								<blockquote>
									<details>
										<summary><b>PhpOption</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/phpoption/phpoption/src/PhpOption/LazyOption.php'>LazyOption.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/phpoption/phpoption/src/PhpOption/Some.php'>Some.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/phpoption/phpoption/src/PhpOption/Option.php'>Option.php</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/vendor/phpoption/phpoption/src/PhpOption/None.php'>None.php</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- public Submodule -->
		<summary><b>public</b></summary>
		<blockquote>
			<details>
				<summary><b>website</b></summary>
				<blockquote>
					<details>
						<summary><b>food</b></summary>
						<blockquote>
							<details>
								<summary><b>css</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/food/css/style.css'>style.css</a></b></td>
										<td></td>
									</tr>
									</table>
									<details>
										<summary><b>webfonts</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/food/css/webfonts/fa-solid-900.ttf'>fa-solid-900.ttf</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/food/css/webfonts/fa-brands-400.ttf'>fa-brands-400.ttf</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/food/css/webfonts/fa-regular-400.ttf'>fa-regular-400.ttf</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
									<details>
										<summary><b>External</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/food/css/External/all.min.css'>all.min.css</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
								</blockquote>
							</details>
							<details>
								<summary><b>js</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/food/js/min.js'>min.js</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
					<details>
						<summary><b>nike</b></summary>
						<blockquote>
							<details>
								<summary><b>css</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/nike/css/style.css'>style.css</a></b></td>
										<td></td>
									</tr>
									</table>
									<details>
										<summary><b>webfonts</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/nike/css/webfonts/fa-solid-900.ttf'>fa-solid-900.ttf</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/nike/css/webfonts/fa-brands-400.ttf'>fa-brands-400.ttf</a></b></td>
												<td></td>
											</tr>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/nike/css/webfonts/fa-regular-400.ttf'>fa-regular-400.ttf</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
									<details>
										<summary><b>External</b></summary>
										<blockquote>
											<table>
											<tr>
												<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/nike/css/External/all.min.css'>all.min.css</a></b></td>
												<td></td>
											</tr>
											</table>
										</blockquote>
									</details>
								</blockquote>
							</details>
							<details>
								<summary><b>js</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/website/nike/js/min.js'>min.js</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>dashboard</b></summary>
				<blockquote>
					<details>
						<summary><b>layout</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/dashboard/layout/footer.php'>footer.php</a></b></td>
								<td></td>
							</tr>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/public/dashboard/layout/head.php'>head.php</a></b></td>
								<td></td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- app Submodule -->
		<summary><b>app</b></summary>
		<blockquote>
			<details>
				<summary><b>core</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/core/db.php'>db.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/core/controller.php'>controller.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/core/app.php'>app.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/core/dbHandler.php'>dbHandler.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/core/helper.php'>helper.php</a></b></td>
						<td></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>controllers</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/controllers/categoryController.php'>categoryController.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/controllers/site_settingController.php'>site_settingController.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/controllers/dashboardController.php'>dashboardController.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/controllers/userController.php'>userController.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/controllers/postController.php'>postController.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/controllers/homeController.php'>homeController.php</a></b></td>
						<td></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>models</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/models/roleModel.php'>roleModel.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/models/categoryModel.php'>categoryModel.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/models/postModel.php'>postModel.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/models/site_settingModel.php'>site_settingModel.php</a></b></td>
						<td></td>
					</tr>
					<tr>
						<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/models/usermodel.php'>usermodel.php</a></b></td>
						<td></td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>views</b></summary>
				<blockquote>
					<details>
						<summary><b>website</b></summary>
						<blockquote>
							<details>
								<summary><b>food</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/website/food/index.php'>index.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>nike</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/website/nike/index.php'>index.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
					<details>
						<summary><b>dashboard</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/index.php'>index.php</a></b></td>
								<td></td>
							</tr>
							</table>
							<details>
								<summary><b>site_settings</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/site_settings/theam.php'>theam.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>category</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/category/add.php'>add.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/category/index.php'>index.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/category/update.php'>update.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>posts</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/posts/add.php'>add.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/posts/index.php'>index.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/posts/update.php'>update.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
							<details>
								<summary><b>users</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/users/add.php'>add.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/users/index.php'>index.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/users/login.php'>login.php</a></b></td>
										<td></td>
									</tr>
									<tr>
										<td><b><a href='https://github.com/MostafaAllam-start/MVC/blob/master/app/views/dashboard/users/update.php'>update.php</a></b></td>
										<td></td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
				</blockquote>
			</details>
		</blockquote>
	</details>
</details>

##  Getting Started

###  Prerequisites

Before getting started with MVC, ensure your runtime environment meets the following requirements:

- **Programming Language:** PHP
- **Package Manager:** Composer


###  Installation

Install MVC using the following methods:

**Build from source:**

1. Clone the MVC repository:
```sh
❯ git clone https://github.com/MostafaAllam-start/MVC
```

2. Navigate to the project directory:
```sh
❯ cd MVC
```

3. Install the project dependencies:


**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ composer install
```




###  Usage
Run MVC using the following command:
**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ php {entrypoint}
```


###  Testing
Run the test suite using the following command:
**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ vendor/bin/phpunit
```



